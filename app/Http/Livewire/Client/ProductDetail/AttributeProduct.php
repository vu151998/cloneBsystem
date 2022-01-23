<?php

namespace App\Http\Livewire\Client\ProductDetail;

use App\Models\products;
use App\Models\Attribute;
use Livewire\Component;
use DB;

class AttributeProduct extends Component
{
    public $idpro;
    public $attribute =[];
    public $count = 0;
    public function mount($idpro){
        $this->idpro = $idpro;
    }

    public function getAttribute(){
       //lấy danh sách sản phẩm con 
        $subproduct = products::where('masterproduct','=',$this->idpro)->pluck('id');
        $this->count =$subproduct->count();
        if($this->count>0){
            
            $subproduct->push($this->idpro);
            //dd($subproduct);
            foreach($subproduct as $sub){
                $a = Attribute::where('product_id',$sub)->get();
                $element ='';
                foreach($a as $item){
                    $element = $element.' '.$item->attribute_value;
                }
                $this->attribute[$sub] = $element;  
            }
        }
        
    }
    public function switchAttribute($value){
        $this->idpro =$value;
        $this->emit('swichAttribute',$value);
    }

    public function render()
    {
        $this->getAttribute();
        return view('livewire.client.product-detail.attribute-product');
    }
}
