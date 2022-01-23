<?php

namespace App\Http\Livewire\Owners\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesManager extends Component
{ 
    public $status;
    public $numberofServices;
    
    public function mount(){
      
    }
    public function updatedNumberofServices($value){
        //dd($value);
        $this->numberofServices = $value;
    }
  
   
    public function render()
    {
        return view('livewire.owners.services.services-manager');
    }
}


  // public function openService($value){
    //     $this->detailService =json_decode( $value);

    //    // dd($this->detailService);
    //     // Service::where('services.id',$value)
    //     //                     ->join('prices','services.price_id','=','prices.id')
    //     //                     ->select('services.*','prices.price_base as price')
    //     //                     ->first();
    // //   dd($this->detailService);

    // }