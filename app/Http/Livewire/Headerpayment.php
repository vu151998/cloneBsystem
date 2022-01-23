<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Headerpayment extends Component
{
    public $title;
   
    public function render()
    {
        
        $show = $this->title;
        return view('livewire.headerpayment')->with(compact('show'));
    }
}
