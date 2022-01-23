<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffTaskDetail extends Model
{
    use HasFactory;
    public function bill(){
        return $this->belongsTo(Bill::class,'bill_code','code');
    }
    public function staff(){
        return $this->belongsTo(Staff::class,'staff_id','id');
    }
}
