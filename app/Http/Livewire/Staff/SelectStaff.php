<?php

namespace App\Http\Livewire\Staff;

use Gloudemans\Shoppingcart\Facades\Cart;


use Livewire\Component;

class SelectStaff extends Component
{
    protected $listeners = [
        'staff_updated'];
        // =>'render'
        
    public $cartStaffs ;

    public function staff_updated(){
        $this->cartStaffs = Cart::instance('shopping4')->content();
       
        $this->emit('staff_updated');
        
        
    }

    public function mount(){
     $this->staff_updated();

   
     
    }

    public function deleteCartStaff($rowId){
        Cart::instance('shopping4')->remove($rowId);
        $this->cartStaffs = Cart::instance('shopping4')->content();
        
        $this->emit('staff_updated');
     
     }
    public function render()
    {
        return view('livewire.staff.select-staff');
    }
}
