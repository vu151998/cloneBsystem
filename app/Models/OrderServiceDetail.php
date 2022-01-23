<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderServiceDetail extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(CustomerOrder::class,'customer_id','id');
    }
    public function bill(){
        return $this->belongsTo(Bill::class,'bill_code','code');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
    public function billDetail(){
        return $this->hasOne(BillDetail::class,'orderService_id','id');
    }
}
