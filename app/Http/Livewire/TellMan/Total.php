<?php

namespace App\Http\Livewire\TellMan;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class Total extends Component

{
  
     
    protected $listeners = ['product_updated'=>'render','service_updated'=>'render'];
        
    public $cartProducts ;
    public $status;
    public $totalPrice;
    public $totalProduct;
    public $totalService;
    
   
   
     
   
    
    public function render()
     
    {
        if($this->status == '1'){
            
            $this->totalPrice = Cart::instance('shopping1')->initial();
        }else if($this->status == '2'){
            $this->totalPrice = Cart::instance('shopping')->initial();
            
          
        }else if($this->status == '3'){
             

            
            $this->totalPrice =  str_replace( ',', '', Cart::instance('shopping1')->initial() ) + str_replace( ',', '', Cart::instance('shopping')->initial() );
            $this->totalPrice = number_format($this->totalPrice, 2, '.', ',');
        }else if($this->status == '4'){
            $this->totalPrice = Cart::instance('shopping2')->initial();
       
        }else if($this->status == '5'){
            $this->totalPrice = Cart::instance('shopping3')->initial();
            
        }
        
        return view('livewire.tell-man.total');
    }
}
