<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bills extends Model
{

  

    public $table = "bills";
   protected $primaryKey = 'id';
    use HasFactory;
    // protected $primaryKey = 'code';
    

    protected $fillable = [
        'id',
        'channels',
        'customer_id',
        
        'status',
        'orderDate',
        'note',
        'total',
        'note',
        'noteReport1',
        'noteReport2',
     ];
    // public function customer(){
    //     return $this->belongsTo(CustomerOrder::class,'customer_id','id');
    // }
    // public function orderProducts(){
    //     return $this->hasMany(OrderProductDetail::class,'bill_code','code');
    // }
    // public function orderServices(){
    //     return $this->hasMany(OrderServiceDetail::class,'bill_code','code');
    // }
    // public function staffTaskDetails(){
    //     return $this->hasMany(StaffTaskDetail::class,'bill_code','code');
    // }
    // public function billDetails(){
    //     return $this->hasMany(BillDetail::class,'bill_code','code');
    // }

  
}
