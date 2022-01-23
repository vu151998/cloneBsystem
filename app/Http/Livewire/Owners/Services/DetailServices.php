<?php

namespace App\Http\Livewire\Owners\Services;

use App\Models\Image;
use App\Models\Prices;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailServices extends Component
{
    public $detailService;
    public $servi;
    public $name;
    public $price;
    public $phone;
    public $title;
    public $description;
    public $idser;
    protected $listeners = ['openService'];
    use WithFileUploads;
 
    public $photo;
    public function openService($value){
        $this->id = $value;
        $this->detailService = Service::where('services.id',$value)
                            ->first();
        $this->name = $this->detailService->name;
        $this->price = Prices::where('id','=',$this->detailService->price_id)
        ->pluck('price_base')->first();
        $this->phone = $this->detailService->phone;
        $this->title = $this->detailService->title;
        $this->description = $this->detailService->description;
        $this->idser =$value;
       
    }
    public function updateService(){
        $price =Prices::where('id','=',$this->detailService->price_id)
        ->pluck('price_base')->first();
        $serviceUpdate =(object)[]; 
        $serviceUpdate ->id =$this->idser;
        $serviceUpdate ->name =$this->name;
        if($this->price != $price){
            $serviceUpdate ->price =$this->price;
        }else{
            $serviceUpdate ->price = null;
        }
        $serviceUpdate ->phone =$this->phone;
        $serviceUpdate ->title =$this->title;
        $serviceUpdate ->description =$this->description;
        $this->emit('updateImage',$serviceUpdate);
    }

    public function render()
    {
        // $this->detailService = Service::where('services.id', $this->id)
        //     ->join('prices','services.price_id','=','prices.id')
        //     ->select('services.*','prices.price_base as price')
        //     ->first();

        return view('livewire.owners.services.detail-services');
    }
}
