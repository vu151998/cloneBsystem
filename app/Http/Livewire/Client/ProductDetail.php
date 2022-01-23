<?php

namespace App\Http\Livewire\Client;

use App\Models\Image;
use App\Models\products;
use Livewire\Component;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductDetail extends Component
{
    public $detailProduct;
    public $idpro;
    public $qty ='1';
    public $attribute= [];
    public $count;
    protected $listeners = ['swichAttribute'];
    public function mount($id){
        $this->idpro = $id;
        $this->getDetailProduct();
           // dd($this->detailProduct);
        $this->count = products::where('masterproduct','=',$this->idpro)->pluck('id')->count();
    }
    public function getDetailProduct(){
        // lấy giá sản phẩm, thương hiệu danh mục
        $this->detailProduct = products::where('products.id',$this->idpro)
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->join('categories as a', 'categories.parent_id', '=', 'a.category_id')
        ->join('categories as root', 'root.parent_id', '=', 'a.category_id')
        ->join('prices','price_id', 'prices.id')
        ->join('trademarks','products.trademark_id', 'trademarks.id')
        ->select('products.*','prices.price as price','prices.price_base as price_base',
        'trademarks.trandemark_name as trandemark','categories.category_name as category',
        'a.category_name as parent_category','root.category_name as root_name',
        'a.category_id as parent_category_id','a.parent_id as root_id',)
       
        ->addSelect(DB::raw("null as img"))
        ->first();
        // lấy danh sách hình ảnh của sản phẩm
        try{
            $imges = Image::findImg($this->detailProduct->id);
                foreach($imges as $img){
                   $imgs[] = $img->link;
                }
                $this->detailProduct->img =$imgs;
        }catch(\Exception $e){
              //dd($e);
        }
      
         
    }
    
    public function changeQty($value){
        if($value == '-'){
            $this->qty--;
        }else{
            $this->qty ++;
           
        }
    }
   
    public function addtocart(){
        $product = clone $this->detailProduct;
        $name =$product->first()->productName;
        
        Cart::add(['id' =>  $this->idpro,
            'name' =>$name, 
            'qty' =>$this->qty, 
            'price' => 9.99,
            'weight' => 550, 
            
        ]);
        $this->emit('cart_updated');
    
    }
    public function swichAttribute($value){
        // dd($value);
        $this->idpro=$value;
    }
    public function updatedQty($value){
       $this->qty =$value;
    }
    public function render()
    {   
        $this->getDetailProduct();
        return view('livewire.client.product-detail');
    }
}
