<?php

namespace App\Http\Livewire;

use App\Models\VNlocation\tinhthanhpho;
use App\Models\VNlocation\quanhuyen;
use App\Models\VNlocation\xaphuongthitran;
use DB;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Arr;

use function PHPUnit\Framework\isNull;

class Checkout extends Component
{
    public $cities;
    public $wards;
    public $districts ;

    public $selecteddistrict= null;
    public $selectedward = null;
    public $selectedCity = null;

    public $name;
    public $addressEmail;
    public $phoneNumber;
    public $shippingAddress;
    public $note;
    public $install;

    public function mount($selectedward = null)
    {
        $this->cities = tinhthanhpho::all();
        $this->wards = collect();
        $this->districts = collect();
    }

    public function render()
    {
       
        $this->cities = tinhthanhpho::all();
        return view('livewire.checkout');
    }
    public function checkout()
    {   
       
        session_start();
        if(session()->has('data')){
            unset($_SESSION['data']);
        }
        if(!($this->name == null || $this->addressEmail == null || $this->phoneNumber == null || 
            $this->shippingAddress == null || $this->selectedCity == null || $this->selecteddistrict ==null)){
            $totalProducts =[];
           
            foreach(Cart::content() as $row){ // get all product in cart
                
                $itemInBill = array('productId' => $row->id,
                                    'quantity'=> $row -> qty,
                                    'price'=> $row -> price,
                                    );
                $totalProducts[] = $itemInBill;
            }
            $customer = array(  'name' => $this->name, // create info customer
                                'email'=> $this->addressEmail,
                                'phone'=> $this->phoneNumber,
                                'shipping'=>$this->shippingAddress,
                                'cityId'=>$this->selectedCity,
                                'districtId'=>$this->selecteddistrict,
                                );
            
            if(!DB::table('customers') -> where('phone', '=',$customer['phone'])->exists()){
                DB::table('customers')->insert($customer);
            }else{
                DB::table('customers')
                            ->where('phone', $customer['phone'])
                            ->update([  'name'=>$customer['name'],
                                        'email'=>$customer['email'],
                                        'shipping'=>$customer['shipping'],
                                        'cityId'=>$customer['cityId'],
                                        'districtId'=>$customer['districtId']]);
            }
            $checkout = array(  'customerName' => $customer['name'],
                                'customerEmail'=> $customer['email'],
                                'customerPhone'=> $customer['phone'],
                                'customerShipping'=>$customer['shipping'],
                                'cityID'=>$customer['cityId'],
                                'districtID'=>$customer['districtId'],
                                'note'=>($this->note == null)?"" :$this->note,
                                'install'=> ($this->install == null)? "Không hỗ trợ" :"Có hỗ trợ",
                                'quantity'=>'',
                                'product_id'=>'',
                                'orderDate'=> date("Y-m-d h:i") );

                $checkout['salePrice'] = Cart::subtotal(); // push total money
            
            foreach($totalProducts as $t){
                $checkout['quantity'] =  $t['quantity'];
                $checkout['product_id'] =  $t['productId'];
               // dd($checkout);
            // DB::table('order_products')->insert($checkout);   
            
            }    
            Cart::destroy();
            
            $bill= array(
                    'inforBill' => $checkout,
                    'itemsinBill'=> $totalProducts,
            );
            
            $_SESSION['data'] = $bill;
            
            return  redirect()->route('complete.index');
            
       }
    }
    public function updatedinstall($value){
        $this -> install = $value;
    }

    public function updatedSelectedCity($city)
    {
        $cityID = sprintf("%02d", $city);
        $this->districts = quanhuyen::where('matp', $cityID)->get();
        $this->selecteddistrict = NULL;
    }

    public function updatedSelecteddistrict($district)
    {
        $districtID = sprintf("%05d", $district);
        if (!is_null($district)) {
            $this->wards = xaphuongthitran::where('maqh', $district)->get();
        }
    }
}
