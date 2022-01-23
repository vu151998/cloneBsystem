<?php

namespace App\Http\Livewire\Owners\Products;

use App\Models\Categories;
use App\Models\Prices;
use App\Models\products;
use App\Models\trademark;
use Livewire\Component;
use DB;
use Livewire\WithPagination;
class SearchProducts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search= '';
    public $category = ' ',$trademarkID='> 0';
    public $inventory;
    public $cateID='';
    public $queryTrademark;
    public $trademarks;
    
    protected $listeners = ['getCate','deleteProduct','updateProduct']; // get category ID form component FillterCategory

    public function mount()
    {
        $this->inventory ="> -1";
        $this->trademarks =  trademark::get()->toArray();
        $this->trademarks = json_decode(json_encode($this->trademarks), true); //  endcode -> json -> decode 
        // dd($this->trademarks);
    }
   
    public function updatedQueryTrademark($value){
        $this->trademarks =  trademark::where('trademark', 'like', '%'.$value.'%')->get()->toArray();
        $this->trademarks = json_decode(json_encode($this->trademarks), true);
    }
    public function updating(){
        $this->resetPage();
    }
    
    public function deleteProduct($value){
        products::where('id',$value)
        ->update(['status' => 0]);
        $this->resetPage();
    }

    

    public function updateProduct($product){
        
        $Price  = new Prices();
        $Price->product_id = $product['id'];
        $Price->price_base = $product['price_base'];
        $Price->price = $product['price'];
       
        $Price->save(); 

         products::where('id',$product['id'])->update(['price_id' => $Price->id]);
         $this->emit('getDetailProduct',  $product['productCode'] );
    }
    public function searchProducts(){ // join 3 bảng để tìm cây phả hệ
        if(''!= $this->cateID){ 
            $products = products::where('status','=','1')
                ->join('prices','products.price_id','=','prices.id')
                ->join('categories', 'products.category_id', '=', 'categories.category_id')
                ->join('categories as a', 'categories.parent_id', '=', 'a.category_id')
                ->where('productname', 'like', '%'.$this->search.'%')
                ->Whereraw('qty '.$this->inventory)
                ->Whereraw('trademark_id '.$this->trademarkID)
                ->where(function ($query) {
                    $query->Where('products.category_id',$this->cateID) // bậc 3
                    ->orWhere('categories.parent_id',$this->cateID) // bậc 2
                    ->orWhere('a.parent_id',$this->cateID);})// bậc 1})
                ->paginate(12);               
        }else{ // tất cả danh mục
            $products =  products::where('status','=','1')
                ->join('prices','products.price_id','=','prices.id')
                ->where(function($query) {
                $query ->where('productname', 'like', '%'.$this->search.'%')
                    ->Whereraw('qty '.$this->inventory);})
                    ->Whereraw('trademark_id '.$this->trademarkID)
                    // ->where(function($query) {
                    //     $query ->whereraw('trademark = '.$this->trademarkID)
                    //             ->orWhereraw('1 = 1') ;})
                               
                    ->paginate(12);
        }
        
    return $products;
    }
    public function getCate($value){
        $this->cateID = $value;
        $this->resetPage();
    }
    public function getTrademarkID($value){
        $this->trademarkID = $value;
        $this->resetPage();
    }
    public function render()
    {   
        $products=$this->searchProducts();
        
       // dd($products);
        return view('livewire.owners.products.search-products',['products' => $products]);
    }
   
    
}
