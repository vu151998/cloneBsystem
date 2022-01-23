<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto_marker extends Model
{
    use HasFactory;
    public function customer_license_automakers(){
        return $this->hasMany(Customer_license_automakers::class,'autoMaker_id','id');
    }
}
