<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    public function staffTaskDetails(){
        return $this->hasMany(StaffTaskDetail::class,'staff_id','id');
    }
}
