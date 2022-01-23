<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'channels',
        'customer_id',
        'status',
        'orderDate',
        'total',
        'note',
     ];
    public function customer(){
        return $this->belongsTo(CustomerOrder::class,'customer_id','id');
    }
    public function orderProducts(){
        return $this->hasMany(OrderProductDetail::class,'bill_code','id');
    }
    public function orderServices(){
        return $this->hasMany(OrderServiceDetail::class,'bill_code','id');
    }
    public function staffTaskDetails(){
        return $this->hasMany(StaffTaskDetail::class,'bill_code','id');
    }
    public function billDetails(){
        return $this->hasMany(BillDetail::class,'bill_code','id');
    }
    public function bill_workers(){
        return $this->hasMany(Bill_worker::class,'bill_code','id');
    }
}
