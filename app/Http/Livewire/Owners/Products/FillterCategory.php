<?php

namespace App\Http\Livewire\Owners\Products;

use Livewire\Component;
use DB;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Distributions\F;

class FillterCategory extends Component
{
    public $categories;
    
    public function mount(){
        $this->categories =  DB::table('categories') ->get()->toArray(); // lấy dữ liệu từ database
        $this->categories = json_decode(json_encode($this->categories), true); //  endcode -> json -> decode 
        $cat = $this->buildTree($this->categories);
        $this->categories = $cat;
       
        
    }
    public function buildTree(Array $data, $parent = null) {
        $tree = array();
       foreach ($data as $d) {
            if ($d['parent_id'] == $parent) {
                $children = $this->buildTree($data, $d['category_id']); //danh sách con
                if (!empty($children)) { //nếu có con
                    $d['children'] = $children;
                }
                $tree[] = $d; 
            }
        }
       
        return $tree;
    }
   
    
    public function render()
    {
       return view('livewire.owners.products.fillter-category');
    }
}
