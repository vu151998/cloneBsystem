<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_license_automakers extends Model
{
    use HasFactory;
    public function auto_marker(){
        return $this->belongsTo(Auto_marker::class,'autoMaker_id','id');
    }
    public function customer(){
        return $this->belongsTo(CustomerOrder::class,'customer_id','id');
    }
}
