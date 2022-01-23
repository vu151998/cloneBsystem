<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    
    public $table = "attribute_products";
   // protected $primaryKey ='productcode';
   protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [
        'id',
        'attribute_name',
        'attribute_value',
        'product_id'
    ];
    
}
