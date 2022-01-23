<?php

namespace App\Http\Livewire\Client;

use App\Models\Categories;
use App\Models\Image;
use Livewire\Component;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\WithPagination;


class ProductList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $idcat;
    public $subcategories;
    public $cateName;
    public $Trademarks;
    public $Filter =[] ;
    public $ob = 'desc';
    public $range =[];
    public $min_price;
    public $max_price;
    // public $query_price;
    public function mount($id)
    {
        $this->cateID = $id;
        $this->getTrademarks();
        $this->subcategories = Categories::getSon($id);
        $this->cateName = Categories::findOrFail($id)->pluck('category_name');
        $this-> diveRangePrice();
       
    }
    public function searchProducts(){ // join 3 bảng để tìm cây phả hệ
        $products =  DB::table('products')
                
                ->join('categories', 'products.category_id', '=', 'categories.category_id')
                ->join('categories as a', 'categories.parent_id', '=', 'a.category_id')
                ->join('prices','price_id', 'prices.id')
                ->select('products.*','categories.category_id as category_id','categories.parent_id as category_parent_id',
                'a.parent_id as category_root','prices.price','prices.price_base')
                ->where(function ($query) {
                    $query->Where('categories.category_id',$this->cateID) // bậc 3
                    ->orWhere('categories.parent_id',$this->cateID) // bậc 2
                    ->orWhere('a.parent_id',$this->cateID);})// bậc 1})
                    ->orderBy('price',$this->ob);
        $counter = 0;
        if(!empty($this->Filter)){
            $query ='' ;
            foreach($this->Filter as $f){ 
                if ($counter == 0) {
                    $query = $query . ' trademark_id = ' .$f;
                }else{
                    $query = $query . ' or trademark_id = ' .$f;
                }
            $counter++;    
            }
            $products-> whereRaw($query);
        }
        if(!empty($this->query_price)){
            $products->whereBetween('price', [$this->query_price['min'], $this->query_price['max']]);
        }
                     
    return $products;
    }
    public function getTrademarks(){
        $this->Trademarks =   DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.category_id')
                ->join('categories as a', 'categories.parent_id', '=', 'a.category_id')
                ->join('prices','price_id', 'prices.id')
                ->where(function ($query) {
                    $query->Where('products.category_id',$this->cateID) // bậc 3
                    ->orWhere('categories.parent_id',$this->cateID) // bậc 2
                    ->orWhere('a.parent_id',$this->cateID);})// bậc 1})
                    ->join('trademarks', 'products.trademark_id', '=', 'trademarks.id')
        ->select('products.trademark_id as trademark_id','trademarks.trandemark_name  as trademark')
        ->groupBy('trademark_id')
        ->get();
    }
    public function diveRangePrice(){ // chia khoảng giá theo min max
        unset($this->range); // $foo is gone
        $this->range = array(); // $foo is here again
        $min = $this->searchProducts()->get()->min('price');
        $max = $this->searchProducts()->get()->max('price');
        $floored = floor(($min + $max)/5);
        $count =0;
        while($count<5){
            $a=array("min"=>$min ,"max"=>$min + $floored);
            array_push($this->range,$a);
            $min  = $min + $floored;
            $count++;
        }
        
    }
    public function inputInRange(){
      
        if($this->min_price> $this->max_price){
            $temp = $this->min_price;
            $this->min_price = $this->max_price;
            $this->max_price =$temp;
        }
        $this->inRange($this->min_price,$this->max_price);
    }
    public function inRange($min, $max){
        $a=array("min"=>$min ,"max"=>$max);
        $this->query_price= $a;
    }
    public function sort($orderting){
        $this->ob =$orderting;
    }
    public function updating(){
        $this->resetPage();
    }
    public function addtowishlist($value,$name){
      
        Cart::instance('wishlist')->add(['id' =>  $value,
        'name' =>$name, 
        'qty' =>'1', 
        'price' => 9.99,
        'weight' => 550, 
    ]);
    }
   
      public function addToCart($id,$name){
        Cart::add(['id' =>  $id,
        'name' => $name, 
        'qty' => 1, 
        'price' => 9.99,
        'weight' => 550, 
        ]);
        
        $this->emit('cart_updated');
        
    }
    
 
  
    public function render()
    {   
        $this->getTrademarks();
        $this->diveRangePrice();
       
        $products = $this->searchProducts()
        ->addSelect(DB::raw("null as img"))
        ->paginate(16);
        
        foreach($products as $product){
          
            try{
                 $imges = Image::findImg($product->id);
                 foreach($imges as $img){
                     $product->img[] = $img->link;
                 }
                //  dd( $product->img);  
             }catch(\Exception $e){
               // dd($e);
             }
           
         }
        
        return view('livewire.client.product-list',['products' => $products]);
    }
}
