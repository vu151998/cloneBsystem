<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairStaff extends Model
{
    use HasFactory;
    public function RepairtStaffOrderServices(){
        return $this->hasMany(RepairtStaffOrderService::class,'staff_id','id');
    }
    public function orderProductStaffs(){
        return $this->hasMany(OrderProductStaff::class,'staff_id','id');
    }
}
