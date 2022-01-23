<?php

namespace App\Http\Livewire\Client\Search;

use Livewire\Component;
use DB;
class Suggestion extends Component
{
    
    public $searchResults;  
    public $keyword='';
    public $show = false;

    public function updatedKeyword(){
       
        if(!$this->keyword == ''){
            $this->show = true;
        }
        else{
            $this->show = false;
        }
        $this->searchResults = DB::table('products')->Where('productName', 'like', '%' . $this->keyword . '%')->get();
    }
    public function render()
    {
        return view('livewire.client.search.suggestion');
    }
}
