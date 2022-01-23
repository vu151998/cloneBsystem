<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLicenseAutomakers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customer_id',
      
        'license_plates',
        'autoMaker_id',
        
      
    ];
    // public function price(){
    //     return $this->hasOne(Price::class,'service_id','id');
    // }
}
