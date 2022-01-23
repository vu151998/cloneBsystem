<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $table = "Services";
    // protected $primaryKey ='productcode';
    protected $primaryKey = 'id';
     use HasFactory;
     protected $fillable = [
         'id',
         'name',
         'price_id',
         'description',
         'status',
         'created_at',
         'updated_at',
 
     ];
    public function orderSSs(){
        return $this->hasMany(OrderSS::class,'service_id','id');
    }
     public function price(){
        return $this->hasOne(Price::class,'service_id','id');
    }

}
