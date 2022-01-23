<?php

namespace App\Http\Livewire\Owners\Services;

use App\Models\Service;
use Livewire\Component;

class ListService extends Component
{
    public $servies;
    public $servicesSelect;
    public function mount(){
        $this->servies =Service::join('prices','services.price_id','=','prices.id')
        ->select('services.*','prices.price_base as price')
        ->get();
        $this->servicesSelect= $this->servies[0]->id;
        //$this->selected($this->servicesSelect);
    }
    public function selected($value){
        $this->servicesSelect = $value;
        $this->emit('openService', $value);
    }
    public function render()
    {
        return view('livewire.owners.services.list-service');
    }
}
