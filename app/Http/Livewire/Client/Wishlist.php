<?php

namespace App\Http\Livewire\Client;

use App\Models\Image;
use App\Models\Prices;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Wishlist extends Component
{
    protected $listeners = ['addtowishlist'];
    public function addtowishlist($value,$name){
      
        Cart::instance('wishlist')->add(['id' =>  $value,
        'name' =>$name, 
        'qty' =>'1', 
        'price' => 9.99,
        'weight' => 550, 
    ]);
    }
    public function addtocart($value,$name){
        Cart::add(['id' =>  $value,
            'name' =>$name, 
            'qty' =>'1', 
            'price' => 9.99,
            'weight' => 550, 
        ]); 
    }
    public function DecreaseQuantity($rowid){
        $cartget = Cart::instance('wishlist')->get($rowid);
       
        $qty = $cartget -> qty -1;
          
        if($qty ==0){
          $this->DeleteProductFromCart($rowid,'-1','');
        }else{
          Cart::instance('wishlist')->update($rowid,$qty);
        }
      }
     
    public function IncreaseQuantity($rowid){
        $cartget = Cart::instance('wishlist')->get($rowid);
        
        $qty = $cartget -> qty +1;
        
        Cart::instance('wishlist')->update($rowid,$qty);
      }
    public function DeleteProductFromCart($rowid , $id, $name){
        if($id!= -1){
            $this->addtocart($id,$name);
        }
        Cart::instance('wishlist')->remove($rowid);
        redirect()->route('wishlist.index');
      }
    public function render()
    {
        foreach( Cart::instance('wishlist')->content()  as $row){
      
            if(is_null($row->image)){
              $image =Image::where('cate_pro_id',$row->id)->pluck('link')->first();
              $row-> image = $image;
            }
            $price = Prices::where('product_id', $row->id)->pluck('price')->first();
            Cart::instance('wishlist')->update($row->rowId,['price'=>$price,
            ]);
          }
        return view('livewire.client.wishlist');
    }
}
