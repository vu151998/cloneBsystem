<?php

namespace App\Http\Livewire\Client\Homepage;

use Livewire\Component;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class Tredding extends Component
{

    public $cate;
    public $selectCate;
    public $productList;
//1526317->id dong xe
    public function mount(){
        $this->selectCate =DB::table('categories')->where('parent_id','1526317')->pluck('category_id')->first();
    }
    public function getcategory(){
        $categori =DB::table('categories')->where('parent_id','1526317')->get();
        return $categori;
    }
    public function selectedCate($value){
        $this->selectCate = $value;
    }
    public function addtocart($value,$name){
        Cart::add(['id' =>  $value,
        'name' =>$name, 
        'qty' =>'1', 
        'price' => 9.99,
        'weight' => 550, 
    ]);
    $this->emit('cart_updated');
    }

    public function render()
    {   $this->cate =$this->getcategory();
        
        //dd($checkcate[0]->parent_id);
        $this->productList = DB::table('bill_details') 
        ->join('products','products.id','=','bill_details.product_id')
        ->join('categories','products.category_id','=','categories.category_id')
        
        ->select('products.*',DB::raw('count(products.productCode) as total'),'categories.parent_id as parent')
        ->groupBy('productCode')
        ->having('parent', '=', $this->selectCate)
        ->orderBy('total','desc')
        
        //->Where('category_id',$checkcate[0]->parent_id)
        ->take(8)->get();
       
        // $this->productList->Where('parent',$this->selectCate)->get();
        $count =0;
        foreach($this->productList as $p){
            $this->productList[$count]->image = DB::table('image')
                ->where('cate_pro_id',$p->id)
                ->first()->link;
            $prices = DB::table('prices')
                ->where('product_id',$p->id)->orderBy('created_at','desc')->first();
            $this->productList[$count]->price =$prices->price;
            $this->productList[$count]->baseprice =$prices->price_base;
            $count ++;
        }
        
        return view('livewire.client.homepage.tredding');
    }
}
