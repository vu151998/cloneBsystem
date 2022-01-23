<?php

namespace App\Http\Livewire\Client;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class PaymentMethod extends Component
{
    public $pay ='VNPay';
    public function VNPay(){
        $this-> pay ='VNPay';
        $this->emit('getPayment',$this-> pay);
    }
    public function MomoPay(){
        $this-> pay ='MomoPay';
        $this->emit('getPayment',$this-> pay);
    }
    public function CODPay(){
        $this-> pay ='COD';
        $this->emit('getPayment',$this-> pay);
    }
    public function render()
    {
        return view('livewire.client.payment-method');
    }
}
