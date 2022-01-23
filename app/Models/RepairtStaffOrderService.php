<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairtStaffOrderService extends Model
{
    use HasFactory;
    public function repairStaff(){
        return $this->belongsTo(RepairStaff::class,'staff_id','id');
    }
    public function orderService(){
        return $this->belongsTo(OrderService::class,'orderService_id','id');
    }
}
