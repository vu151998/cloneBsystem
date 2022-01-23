<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function revenue(){
        return $this->belongsTo(Revenue::class,'revenue_id','id');
    }
    public function orderProductS(){
        return $this->hasMany(OrderProductStaff::class,'orderProduct_id','id');
    }
}
