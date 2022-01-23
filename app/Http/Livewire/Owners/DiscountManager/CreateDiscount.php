<?php

namespace App\Http\Livewire\Owners\DiscountManager;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Component;
use DB;

class CreateDiscount extends Component
{
    
    public $detailDiscount;
    public $date;
    
   

    protected $listeners = ['creatediscount'];
    
    public function mount(){
        $this->detailDiscount = new Coupon();
    }
    protected $rules = [
        'detailDiscount.coupon_code' => 'required',
        'detailDiscount.discount_amount' => 'required',
        'detailDiscount.discount_type' => 'required',
        'detailDiscount.expiration_date' => 'required',
    ];
    public function creatediscount(){
       
           
            $newcoupon = new Coupon();
            $newcoupon->coupon_code = $this->detailDiscount->coupon_code;
            $newcoupon->discount_amount = $this->detailDiscount->discount_amount;
            $newcoupon->discount_type = $this->detailDiscount->discount_type;
            $newcoupon-> expiration_date = $this->date;  
            $newcoupon->save();
            $this->detailDiscount = new Coupon();
            $this->emit('refresh');
        
    }
   
    public function render()
    {
        return view('livewire.owners.discount-manager.create-discount');
    }
}
