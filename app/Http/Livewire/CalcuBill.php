<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CalcuBill extends Component
{
    protected $listeners = ['upTotalBill'=>'render'];
   
   
    public function render()
    {
       
        return view('livewire.calcu-bill');
    }
}
