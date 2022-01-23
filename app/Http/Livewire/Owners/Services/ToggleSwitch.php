<?php

namespace App\Http\Livewire\Owners\Services;

use App\Models\Service;
use Livewire\Component;

class ToggleSwitch extends Component
{
    // 
    public $serviceID;
    public $isActive;
    
    public function mount(){
        
        ($this->serviceID->status == 1) ?  $this->isActive = true : $this->isActive = false;
    }
    
    public function updatedIsActive($value){
        if($value){
            Service::where('id',$this->serviceID->id)->update(['status' => 1]);
        }else{
            Service::where('id',$this->serviceID->id)->update(['status' => 0]);
        }
    }
    public function render()
    {
        return view('livewire.owners.services.toggle-switch');
    }
}
