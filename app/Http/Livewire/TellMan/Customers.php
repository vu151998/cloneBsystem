<?php

namespace App\Http\Livewire\TellMan;
use App\Models\Car;
use App\Models\CustomerOrder;
use App\Models\Service;
use App\Models\products;
use App\Models\Bill;
use App\Models\BillDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\teleSale\Validator;
use Exception;

use Livewire\Component;

class Customers extends Component
{

    //  public $wl;
  

    protected $listeners = [
        'product_updated','service_updated'];
        
    public $cartProducts ;
    public $cartServices ;

    public function product_updated(){
        $this->cartProducts = Cart::instance('shopping1')->content();
        // $this->totalPriceProduct = Cart::instance('shopping1')->total();
        // $this->wl['product']['0'] = Cart::instance('shopping1')->content();
        // $this->emit('product_updated');

        
    }






    public function service_updated(){
        $this->cartServices = Cart::instance('shopping')->content();
        // $this->wl['service']['0'] = Cart::instance('shopping')->content();
        
        // $this->totalPriceService = Cart::instance('shopping')->total();
      
        // $this->emit('service_updated');
        
        
    }

    public function mount(){
     $this->service_updated();
     $this->product_updated();
     }

     


  
    

  
    public function render()
    {
        $this->cartProducts = Cart::instance('shopping1')->content();
        $this->cartServices = Cart::instance('shopping')->content();
        
        return view('livewire.tell-man.customers');
    }
}
