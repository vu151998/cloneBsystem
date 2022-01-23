<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_id',
      
        'price_id',
        'price_base',
        'service_id',
      
    ];
     public function service(){
         return $this->hasMany(prices::class,'service_id','id');
     }
}
