<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Headerpayment extends Component
{ public $title;
    public function render()
    {
        $show = $this->title;
        return view('livewire.client.headerpayment')->with(compact('show'));
    }
}
