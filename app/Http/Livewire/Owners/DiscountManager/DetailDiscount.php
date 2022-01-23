<?php

namespace App\Http\Livewire\Owners\DiscountManager;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Component;
use DB;

class DetailDiscount extends Component
{
    public $iddiscount ;
    public $detailDiscount ;
    public $date;
    public $value;
   

    protected $listeners = ['showdiscount','refresh1'];
    
    protected $rules = [
        'detailDiscount.coupon_code' => 'required',
        'detailDiscount.discount_amount' => 'required',
        'detailDiscount.discount_type' => 'required',
        'detailDiscount.expiration_date' => 'required',
    ];
    public function mount($value){
         
        if($value != -1){
            $this->detailDiscount =(array) DB::table('coupon')
                ->whereDate('expiration_date','>', Carbon::today())
                ->first();
            $this->iddiscount = $value;
            $this->date= date( "Y-m-d", strtotime($this->detailDiscount['expiration_date']));
        }else{
            $this->iddiscount = $value;
             $this->detailDiscount = null;
        }
    }
    public function refresh1(){
        $this->detailDiscount = null;  
    }
    
    public function updateDiscount(){
        $newcoupon =  Coupon::find($this->detailDiscount['id']);
        if (empty($newcoupon)) {// you can do this condition to check if is empty
            $newcoupon= new Coupon;//then create new object
        }
        $newcoupon->coupon_code = $this->detailDiscount['coupon_code'];
        $newcoupon->discount_amount = $this->detailDiscount['discount_amount'];
        $newcoupon->discount_type = $this->detailDiscount['discount_type'];
        $newcoupon-> expiration_date = $this->date;  
        $newcoupon->save();
        $this->emit('refresh');
    }
    public function deleteDiscount(){
        $newcoupon =  Coupon::find($this->detailDiscount['id'])->delete();
        $this->emit('refresh');
    }
    public function showdiscount($value){
        
        $this->detailDiscount =(array) DB::table('coupon')->where('id',$value)->first();
    }
    public function render()
    {
        
        //dd($this->iddiscount);
        return view('livewire.owners.discount-manager.detail-discount');
    }
}
