<?php

namespace App\Http\Livewire\TellMan;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;




class CartProduct extends Component
{
    protected $listeners = [
        'product_updated'];
        
    public $cartProducts ;

    public function product_updated(){
        $this->cartProducts = Cart::instance('shopping1')->content();
    
       $this->emit('product_updated');

        
    }
    

    public function mount(){
     $this->product_updated();

    }

    public function deleteCartProduct($rowId){
        Cart::instance('shopping1')->remove($rowId);
        $this->cartProducts = Cart::instance('shopping1')->content();
        $this->emit('product_updated');
     
     }
     
    public function render()
    {
        return view('livewire.tell-man.cart-product');
    }
}
