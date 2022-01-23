<?php

namespace App\Http\Livewire\Client\Homepage;

use Livewire\Component;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class Hot extends Component
{
    public $productList;
    public function addtocart($value,$name){
        Cart::add(['id' =>  $value,
        'name' =>$name, 
        'qty' =>'1', 
        'price' => 9.99,
        'weight' => 550, 
    ]);
    $this->emit('cart_updated');
    }
    public function addtowishlist($value,$name){
        Cart::instance('wishlist')->add(['id' =>  $value,
        'name' =>$name, 
        'qty' =>'1', 
        'price' => 9.99,
        'weight' => 550, 
    ]);
    }
    public function render()
    {
        $this->productList = DB::table('products')
        ->orderBy('created_at','desc')->take(10)->get();
        $count =0;
        foreach($this->productList as $p){
            $this->productList[$count]->image = DB::table('image')
                ->where('cate_pro_id',$p->id)->first()->link;
            $prices = DB::table('prices')
                ->where('product_id',$p->id)->orderBy('created_at')->first();
            $this->productList[$count]->price =$prices->price;
            $this->productList[$count]->baseprice =$prices->price_base;
            $count ++;
        }
        return view('livewire.client.homepage.hot');
    }
}
