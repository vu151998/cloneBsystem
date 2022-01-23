<?php

namespace App\Http\Livewire\Owners\Products;

use App\Models\Categories;
use App\Models\Image;
use App\Models\Prices;
use App\Models\products;
use App\Models\trademark;
use Livewire\Component;
use DB;
use Illuminate\Support\Facades\Auth;

class InnerProductDetail extends Component
{
    public $newprice;
    public $value;
    protected $listeners = ['getDetailProduct'=>'getDetailProduct'];
    
    public function getDetailProduct($value){
       // dd($value);
        $this->product = products::join('prices','products.price_id','=','prices.id')
        ->where('productcode', '=', $value)
        ->select('products.*','prices.price','prices.price_base')
        ->get();
        $image = Image::where('cate_pro_id',$this->product[0]->id)->pluck('link')->first();
        $this->product[0]->image= $image;
        $this->product[0]->categoryName = Categories::where('category_id',$this->product[0]->category_id)->pluck('category_name')->first();
        $this->product[0]->trademark = trademark::where('id',$this->product[0]->trademark_id)->pluck('trandemark_name')->first();
        $this->newprice = $this->product[0]->price;
        $this->value = $value;
    }
    public function deleteProduct($value){
        $this->render();
        $this->emit('deleteProduct', $value);
    }
    public function updateProduct1($value){
        // dd($this->newprice);
        $value= json_decode($value);
       // dd($this->newprice != $value);
        if($this->newprice != $value->price){
            $value->price = $this->newprice;
            $this->emit('updateProduct', $value);
        }
    }
    
    public function render()
    {
        if(!is_null($this->value)){
            $this->getDetailProduct($this->value);
        }
       
      return view('livewire.owners.products.inner-product-detail');
    }
}
