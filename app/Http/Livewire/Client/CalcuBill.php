<?php

namespace App\Http\Livewire\Client;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CalcuBill extends Component
{
    public $couponCode;
    public $notifycation;
    public $mentodPayment;
   
   
    public function applyCode(){
        Cart::setGlobalDiscount(0);
       
        if(!is_null($this->couponCode)){
            
            $coupon = Coupon::where('coupon_code',$this->couponCode)->first();
            if(!is_null($coupon) ){
                // if($coupon->discount_type == 'payment'){
                    Cart::setGlobalTax(0);
                    $this->notifycation = null;
                    Cart::setGlobalDiscount($coupon->discount_amount);
                //}
            }else{
                $this->notifycation = "Mã giảm giá không tồn tại !!!";
                Cart::setGlobalDiscount(0);
            }
        }
    }
    public function render()
    {
        if(is_null($this->couponCode)){
            Cart::setGlobalDiscount(0);
        }
        return view('livewire.client.calcu-bill');
    }
}
