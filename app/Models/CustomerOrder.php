<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'address',
        'license_plates',
     ];
     public function orderProducts(){
         return $this->hasMany(OrderProductDetail::class,'customer_id','id');
     }
     public function orderServices(){
         return $this->hasMany(OrderServiceDetail::class,'customer_id','id');
     }
    // public function bills(){
    //     return $this->hasMany(Bill::class,'customer_id','id');
    // }
    public function bills(){
        return $this->hasMany(Bills::class,'customer_id','id');
    }
    
    public function customer_license_autoMakers(){
         return $this->hasMany(Customer_license_automakers::class,'	customer_id','id');
     }
}
