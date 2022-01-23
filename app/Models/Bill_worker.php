<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill_worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'bill_code',
        'worker_id',
        'time_start',
        'time_end',
     
     ];

    public function worker(){
        return $this->belongsTo(Worker::class,'	worker_id','id');
    }
    public function bill(){
        return $this->belongsTo(Bill::class,'	bill_code','id');
    }
}
