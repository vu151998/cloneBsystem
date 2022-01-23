<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_details extends Model
{
    
    public $table = "bill_details";
   // protected $primaryKey ='productcode';
   protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [
        'id',
        'bill_code',
        'product_id',
        'productCode',
        'quantily_product',
        'quantily_service',
        'price_product',
        'price_service',
        'note',
        'service_id',
        'updated_at',
        'created_at',
    ];
}
