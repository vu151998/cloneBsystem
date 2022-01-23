<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Header extends Component
{
    protected $listeners = ['cart_updated'=>'render'];
    
    public function render()
    {
        $cart_count = Cart::content()->count();
        return view('livewire.header', compact('cart_count'));
    }
}
