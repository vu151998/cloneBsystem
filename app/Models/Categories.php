<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    
    public $table = "categories";
   // protected $primaryKey ='productcode';
   protected $primaryKey = 'category_id';
    use HasFactory;
    protected $fillable = [
        'category_id',
        'parent_id',
        'category_name',
        'image',
    ];
    public static function getSon($cateID){
        $son = Categories::where('parent_id',$cateID)->get();
        return $son;
    }
}
