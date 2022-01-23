<?php

namespace App\Http\Livewire\Client;

use App\Models\bill_details;
use App\Models\Bills;
use App\Models\Customer;
use App\Models\Vnlocation\quanhuyen;
use App\Models\VNlocation\tinhthanhpho;
use App\Models\Vnlocation\xaphuongthitran;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use DB;

class Checkout extends Component
{
    public $cities;
    public $wards;
    public $districts ;

    public $selecteddistrict= null;
    public $selectedward = null;
    public $selectedCity = null;

    public $name;
    public $email;
    public $phoneNumber;
    public $shippingAddress;
    public $note;
    public $install;
    public $mentodPayment ='VNPay';

    protected $listeners = ['getPayment'];

   
    public function mount()
    {
        $this->cities = tinhthanhpho::all();
        $this->wards = collect();
        $this->districts = collect();
    }
    public function getPayment($value){
        $this->mentodPayment = $value;
    }
    
    protected $messages = [
        'email.required' => 'Địa chỉ email không thể rỗng.',
        'email.email' => 'Địa chỉ email không hợp lệ',
        'phoneNumber.required'=>'Số điện thoại không hợp lệ',
        // 'phoneNumber.regex'=>'Số điện thoại không hợp lệ',
        'shippingAddress.required'=> 'Không thể để trống địa chỉ giao hàng',
        'name.required' => 'Họ tên khách hàng bị rỗng',
        'selectedCity.required'=>'Bạn hãy chọn thành phố',
        'selecteddistrict.required'=>'Bạn hãy chọn quận huyện',
        'selectedward.required'=> 'Bạn hãy chọn phường xã'
    ];

    public function render()
    {
        
        return view('livewire.client.checkout');
    }
    public function saveOrder(){
       
        $this->validate([
            'email' => 'required|email',
            'name' => 'required',
            'phoneNumber'=>['required',
                        'regex:/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/'],
            'shippingAddress'=>['required'],
            'selectedCity' => 'required',
            'selecteddistrict'=> 'required',
            'selectedward'=> 'required',

        ]);
        $this->checkout();
    }
    public function checkout()
    {   
        
       //dd(Cart::priceTotal(2,'.','')-Cart::discount(2,'.',''));
        session_start();
        if(session()->has('data')){
            unset($_SESSION['data']);
        }
        $shipping = $this->shippingAddress.'/'
            .xaphuongthitran::where('xaid',$this->selectedward)->pluck('name')->first().'/'
            .quanhuyen::where('maqh',$this->selecteddistrict)->pluck('name')->first().'/'
            .tinhthanhpho::where('matp',$this->selectedCity)->pluck('name')->first();
            // dd($shipping);
        $totalProducts =[];
        foreach(Cart::content() as $row){ // get all product in cart
                $itemInBill = array('productId' => $row->id,
                                    'quantity'=> $row -> qty,
                                    'price'=> $row -> price,
                                    );
                $totalProducts[] = $itemInBill;
            }
        //insert customer to DB
        $customer = new Customer();
        $customer->name =$this->name;
        $customer->email = $this->email;
        $customer->phone = $this->phoneNumber;
        $customer->address = $shipping;
        
        $customer->save();
        
       
        // add to bill
        $billtoDB = new Bills();
        $billtoDB->customer_id =$customer->id;
        $billtoDB->status ='1';
        $billtoDB->note =$this->note;
        $billtoDB->total = Cart::priceTotal(2,'.','')-Cart::discount(2,'.','');
        $billtoDB->mentodPayment =$this->mentodPayment;
        $billtoDB->channels ='2';
        $billtoDB->save();

        foreach($totalProducts as $t){
            $billdetail = new bill_details();
            $billdetail->bill_code = $billtoDB->id;
            $billdetail->product_id = $t['productId'];
            $billdetail->productCode = DB::table('products')->where('id',$t['productId'])
                                                        ->pluck('productCode')->first();
            $billdetail->quantily_product = $t['quantity'];
            $billdetail->price_product = DB::table('prices')->where('product_id',$t['productId'])
                                                            ->orderBy('created_at','desc')->first()->price;
            
            $billdetail->save();
        }
        if($this->install != null){
            $billdetail = new bill_details();
            $billdetail->bill_code = $billtoDB->id;
            $billdetail->service_id= '3';
            $billdetail->price_service ='0';
            $billdetail->save();
        }
        $checkout = array('customerName' => $customer->name,
                                'customerEmail'=> $customer->email,
                                'customerPhone'=> $customer->phone,
                                'customerShipping'=>$shipping,
                                'note'=>($this->note == null)?"" :$this->note,
                                'install'=> ($this->install == null)? "Không hỗ trợ" :"Có hỗ trợ",
                                'orderDate'=> date("Y-m-d h:i"),
                                'reduced'=>Cart::discount(2,'.',''),
                                'totalbill'=>Cart::priceTotal(2,'.',''),
                                'payment'=>$billtoDB->mentodPayment,
                            );    
        
        foreach($totalProducts as $t){
                $checkout['quantity'] =  $t['quantity'];
                $checkout['product_id'] =  $t['productId'];
              
            }
            
        $bill= array(
                    'inforBill' => $checkout,
                    'itemsinBill'=> $totalProducts,
            );    
            
            $_SESSION['data'] = $bill;
            Cart::destroy();
            return  redirect()->route('complete.index');    
    }
    public function updatedinstall($value){
        $this -> install = $value;
    }

    public function updatedSelectedCity($city)
    {
        // $cityID = sprintf("%02d", $city);
        $cityID = $city;
        $this->districts = quanhuyen::where('matp', $cityID)->get();
        $this->selecteddistrict = NULL;
    }

    public function updatedSelecteddistrict($district)
    {
        
        //dd( $district);
        if (!is_null($district)) {
            $this->wards = xaphuongthitran::where('maqh', $district)->get();
        }
    }
}
