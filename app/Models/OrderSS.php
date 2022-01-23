<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSS extends Model
{
    use HasFactory;
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function orderService(){
        return $this->belongsTo(OrderService::class,'orderService_id','id');
    }
}
