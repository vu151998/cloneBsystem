<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = "customer_orders";
    // protected $primaryKey ='productcode';
    protected $primaryKey = 'id';
     use HasFactory;
     protected $fillable = [
         'id',
         'name',
         'phone',
         'address',
         'email',
         'license_plates',
         'updated_at',
         'created_at'
     ];
    // public function orderProducts(){
    //      return $this->hasMany(OrderProduct::class,'customer_id','id');
    // }
    // public function orderServices(){
    //     return $this->hasMany(OrderService::class,'customer_id','id');
    // }
}
