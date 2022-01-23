<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'phone',
        'address',
        'age',
        'status',
        'group_workerID',


       
     ];
    public function group_worker(){
        return $this->belongsTo(Group_worker::class,'group_workerID','id');
    }
    public function bill_workers(){
        return $this->hasMany(Bill_worker::class,'worker_id','id');
    }
}
