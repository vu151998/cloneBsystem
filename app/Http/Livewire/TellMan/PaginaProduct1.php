<?php

namespace App\Http\Livewire\TellMan;

use Livewire\WithPagination;
use App\Models\products;
use App\Models\Price;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;



use Livewire\Component;



class PaginaProduct1 extends Component
{

    use WithPagination;
protected $paginationTheme = 'bootstrap';

public function updating(){ 
    $this->resetPage();
}




public function AddCartProduct($productcode){
 
    // $product = products::find($id);
    $product = products::where('productcode',$productcode)->first();
   
    Cart::instance('shopping2')->add([
     
        // 'id' => $product->id,
        'id' => $productcode,
      
        'name' => $product->productName,
        'price' => $product->price->price,
        'description' => $product->description,
        'weight' => 0,
        'qty' => 1,
      
     
    ]);
    $this->emit('product_updated');
}

public $searchTerm1;

     
    public function render()
    {
        $searchTerm1 = '%'.$this->searchTerm1.'%';
        
        return view('livewire.tell-man.pagina-product1', [
          
            'products' =>DB::table('products')->select('products.id','products.productcode','products.productname','trademarks.trandemark_name','categories.category_name','categories.category_id as categoriesID','trademarks.id as trademarksID','prices.price')->join('prices', 'products.id', '=', 'prices.product_id')->join('trademarks', 'products.trademark_id', '=', 'trademarks.id')->join('categories', 'products.category_id', '=', 'categories.category_id')->where('products.productname', 'like', $searchTerm1)->paginate(5),
          //  dd(DB::table('products')->select('products.id','products.productcode','products.productname','trademarks.trandemark_name','categories.category_name','categories.category_id as categoriesID','trademarks.id as trademarksID','prices.price')->join('prices', 'products.id', '=', 'prices.product_id')->join('trademarks', 'products.trademark_id', '=', 'trademarks.id')->join('categories', 'products.category_id', '=', 'categories.category_id')->where('products.productname', 'like', $searchTerm1))
        
       ]);
    }
}
