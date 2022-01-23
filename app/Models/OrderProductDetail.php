<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductDetail extends Model
{
    use HasFactory;
    public function customer(){
        return $this->belongsTo(CustomerOrder::class,'customer_id','id');
    }
    public function bill(){
        return $this->belongsTo(Bill::class,'bill_code','code');
    }
    public function billDetail(){
        return $this->hasOne(BillDetail::class,'orderProduct_id','id');
    }
}
