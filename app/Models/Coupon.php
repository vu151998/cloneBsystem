<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    
    public $table = "coupon";
   // protected $primaryKey ='productcode';
   protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [
        'id',
        'coupon_code',
        'discount_amount',
        'discount_type',
        'expiration_date'=>'datetime',
        'created_at',
        'updated_at',

    ];
    
}
