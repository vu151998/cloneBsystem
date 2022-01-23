<?php

namespace App\Http\Livewire\TellMan;

use App\cart\cartService as CartCartService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;


class CartService1 extends Component
{
    protected $listeners = [
        'service_updated'];
        
    public $cartServices ;

    public function service_updated(){
        $this->cartServices = Cart::instance('shopping3')->content();
        // dd( $this->cartServices = Cart::instance('shopping')->content());

        // $wl['services'][] = Cart::instance('shopping')->content();
        // foreach($wl['services'] as $a){
        //     dd($a);
        // }
        // dd( $wl);
     
        // $this->totalPriceService = Cart::instance('shopping')->total();
        $this->emit('service_updated');
        
        
    }

    public function mount(){
     $this->service_updated();

   
     
    }

    public function deleteCartService($rowId){
        Cart::instance('shopping3')->remove($rowId);
        $this->cartServices = Cart::instance('shopping3')->content();
        
        $this->emit('service_updated');
     
     }

    public function render()
    {
        return view('livewire.tell-man.cart-service1');
    }
}
