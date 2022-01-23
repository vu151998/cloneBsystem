<?php

namespace App\Http\Livewire\TellMan;

use Livewire\WithPagination;
use App\Models\Service;
use App\Models\Price;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class PaginaService1 extends Component
{
   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function updating(){ 
        $this->resetPage();
    }
 
    public $searchTerm;
    // public $service;
 
    public function AddCartService($id){
    // $this->id = Service::find($id);
    // dd( $this->id);
    // $service = DB::table('services')->select('services.id','services.name','prices.price')->join('prices', 'services.price_id', '=', 'prices.service_id')->get()->find($id);
    //  $service->find($this->id = DB::table('services')->select('services.id'));
    //  dd($service);
    $service = Service::find($id);
    $this->cartServices = Cart::instance('shopping3')->content();
    if (!is_null($this->cartServices)){
    foreach($this->cartServices as $cartService){
       if($cartService->name == $service->name){
          return 0;
       }
    }
   }
        
        Cart::instance('shopping3')->add([
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
        return view('livewire.tell-man.pagina-service1', [
         'services' =>DB::table('services')->join('prices', 'services.id', '=', 'prices.service_id')->where('services.name', 'like', $searchTerm)->paginate(5),
        ]);
    }
}
