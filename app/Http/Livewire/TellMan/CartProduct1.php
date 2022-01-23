<?php

namespace App\Http\Livewire\TellMan;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;




class CartProduct1 extends Component
{
    protected $listeners = [
        'product_updated'];
        
    public $cartProducts ;

    public function product_updated(){
        $this->cartProducts = Cart::instance('shopping2')->content();
        // dd( $this->cartProducts  = Cart::instance('shopping1')->content());

        // $wl['products'][] = Cart::instance('shopping1')->content();
        // foreach($wl['products'] as $a){
        //     dd($a);
        // }
        // dd( $wl);
    //    $this->totalPriceProduct = Cart::instance('shopping1')->total();
       $this->emit('product_updated');

        
    }
    

    public function mount(){
     $this->product_updated();

    }

    public function deleteCartProduct($rowId){
        Cart::instance('shopping2')->remove($rowId);
        $this->cartProducts = Cart::instance('shopping2')->content();
        $this->emit('product_updated');
     
     }
     
    public function render()
    {
        return view('livewire.tell-man.cart-product1');
    }
}
