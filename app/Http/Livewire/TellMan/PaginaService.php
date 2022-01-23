<?php

namespace App\Http\Livewire\TellMan;

use Livewire\WithPagination;
use App\Models\Service;
use App\Models\Price;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class PaginaService extends Component
{
   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function updating(){ 
        $this->resetPage();
    }
 
    public $searchTerm;
    // public $service;
 
    public function AddCartService($id){
  
    $service = Service::find($id);
        
         $this->cartServices = Cart::instance('shopping')->content();
         if (!is_null($this->cartServices)){
         foreach($this->cartServices as $cartService){
            if($cartService->name == $service->name){
               return 0;
            }
         }
        }
        Cart::instance('shopping')->add([
            'id' => $service->id,
            'name' => $service->name,
            'price' => $service->price->price,
            'description' => $service->description,
            'weight' => 0,
            'qty' => 1,
            
        ]);
        $this->emit('service_updated');
    }

  
   
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.tell-man.pagina-service', [
         'services' =>DB::table('services')->join('prices', 'services.id', '=', 'prices.service_id')->where('services.name', 'like', $searchTerm)->paginate(5),
        ]);
    }
}
