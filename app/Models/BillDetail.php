<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $fillable = [
        'id',
        'bill_code',
        'note',
        'product_id',
        'productCode',
        'service_id',
        'price_product',
        'quantily_product',
        'price_service',
        'quantily_service',
     ];
    use HasFactory;
    public function bill(){
        return $this->belongsTo(Bill::class,'bill_code','id');
    }
    public function orderProductDetail(){
        return $this->belongsTo(OrderProductDetail::class,'orderProduct_id','id');
    }
    public function orderServiceDetail(){
        return $this->belongsTo(OrderServiceDetail::class,'orderService_id','id');
    }
    public function product(){
        return $this->belongsTo(products::class,'productCode','productCode');
    }
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
