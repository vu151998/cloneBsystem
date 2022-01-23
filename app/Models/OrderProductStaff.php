<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductStaff extends Model
{
    use HasFactory;
    public function orderProduct(){
        return $this->belongsTo(OrderProduct::class,'orderProduct_id','id');
    }
    public function repairStaff(){
        return $this->belongsTo(RepairStaff::class,'staff_id','id');
    }
}
