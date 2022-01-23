<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class products extends Model
{
    public $table = "products";
    protected $primaryKey ='productcode';
    use HasFactory;
    protected $fillable = [
        'id',
        'productcode',
        'productname',
        'trademark_id',
        'price_id',
        'qty',
        'minqty',
        'maxqty',
        'masterproduct',
        'weight',
        'category_id',
    ];
    public static function search($search ){
        return empty($search) ? static::query()
        :static::query()->where('fullname','like','%'.$search.'%')->get();
    }
    public static function getProducts($cateID, $trademarkID){
        
         $products =  DB::table('products') 
        ->join('categories', 'products.category_id', '=', 'categories.category_id')
        ->join('categories as a', 'categories.parent_id', '=', 'a.category_id')
        ->join('prices','price_id', 'prices.id')
        ->where(function ($query ) use($cateID) {
            $query->Where('products.category_id',$cateID) // bậc 3
            ->orWhere('categories.parent_id',$cateID) // bậc 2
            ->orWhere('a.parent_id',$cateID);})// bậc 1})
        ->orWhereraw('trademark_id '.$trademarkID);
        
        return $products;             
    }
     public function price(){
        return $this->hasOne(Price::class,'product_id','id');
    }
}
