<?php

namespace App\Http\Livewire\Owners\Products;

use Livewire\Component;
use DB;
class FillterTrademark extends Component
{
    public $trademarks;
    public $query;
    public function updatedQuery($value){
        $this->trademarks =  DB::table('trademark')->where('trademark', 'like', '%'.$value.'%')->get();
    }
    public function mount(){
        $this->trademarks =  DB::table('trademark') ->get();
    }
    public function render()
    {
        return view('livewire.owners.products.fillter-trademark');
    }
}
