<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'parent_id',
      
        'category_name',
    
      
    ];
    // public function price(){
    //     return $this->hasOne(Price::class,'service_id','id');
    // }
}
