<?php

namespace App\Http\Livewire\Client;

use App\Models\Image;
use App\Models\Prices;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;


class Shoppingcart extends Component
{
  protected $listeners = ['render'];
  public function DecreaseQuantity($rowid){
        $cartget = Cart::get($rowid);
       
        $qty = $cartget -> qty -1;
          
        if($qty ==0){
          $this->DeleteProductFromCart($rowid);
        }else{
          Cart::update($rowid,$qty);
        }
      }
     
  public function IncreaseQuantity($rowid){
        $cartget = Cart::get($rowid);
       
        $qty = $cartget -> qty +1;
        
        Cart::update($rowid,$qty);
      }

  public function DeleteProductFromCart($rowid){
        Cart::remove($rowid);
        redirect()->route('shoppingcart.index');
      }
  public function checkout(){
    if(Cart::count()>0){
      redirect()->route('checkout.index');
    }
  }
  public function render()
    {
      
    foreach( Cart::content()  as $row){
      
      if(is_null($row->image)){
        $image =Image::where('cate_pro_id',$row->id)->pluck('link')->first();
        $row-> image = $image;
      }
      $price = Prices::where('product_id', $row->id)->pluck('price')->first();
      Cart::update($row->rowId,['price'=>$price,
      ]);
    }
    return view('livewire.client.shoppingcart');
    }
}
