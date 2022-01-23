<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoMarker extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
      
     
      
    ];
    // public function price(){
    //     return $this->hasOne(Price::class,'service_id','id');
    // }
}
