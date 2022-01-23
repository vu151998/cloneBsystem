<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
class ProductsTable extends Component
{
    public function render()
    {
        // $cart = Cart::content();

        return view('livewire.products-table');
    }
    public function addToCart(){
        Cart::add(['id' => '132',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '222',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '133332',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '4444',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '22212',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '8898132',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '9898',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
        Cart::add(['id' => '767',
        'name' => 'Product ', 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        'options' => ['size' => 'large']]);
        $this->emit('cart_updated');
    }

   
 
   
}
