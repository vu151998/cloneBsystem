<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;
    public function orderServices(){
        return $this->hasMany(OrderService::class,'revenue_id','id');
    }
    public function orderproducts(){
        return $this->hasMany(OrderProduct::class,'revenue_id','id');
    }
}
