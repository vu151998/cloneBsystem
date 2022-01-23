<?php

namespace App\Http\Livewire\Client;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use DB;

class Header extends Component
{
   
    protected $listeners = ['cart_updated'=>'render'];

  
    
    public function render()
    {
        
        $cart_count = Cart::content()->count();
        return view('livewire.client.header', compact('cart_count'));
    }
}
