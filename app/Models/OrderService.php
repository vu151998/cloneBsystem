<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function orderSS(){
        return $this->hasMany(OrderSS::class,'orderService_id','id');
    }
    public function repairtStaffOrderService(){
        return $this->hasMany(RepairtStaffOrderService::class,'orderService_id','id');
    }
    public function revenue(){
        return $this->belongsTo(Revenue::class,'revenue_id','id');
    }
}
