<?php

namespace App\Http\Livewire\Owners\DiscountManager;

use Carbon\Carbon;
use Livewire\Component;
use DB;
use Livewire\WithPagination;

class ListDiscount extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refresh'=>'render'];

    public $idSelect;
    
    public function mount(){
        $this->idSelect =DB::table('coupon')
        ->whereDate('expiration_date','>', Carbon::today())->pluck('id')->first();
    }
    
    public function updating(){
        $this->resetPage();
    }

    public function createDiscount(){
        $this->emit('creatediscount');
    }
    
    public function selectRow($value){
        $this->idSelect = $value;
        $this->emit('showdiscount',$this->idSelect);
      
    }
    
    public function render()
    {
        
        $listdiscount = DB::table('coupon')->whereDate('expiration_date','>', Carbon::today())->paginate(7);
        return view('livewire.owners.discount-manager.list-discount',['listdiscount' => $listdiscount]);
    }
}
