<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    public $table = "prices";
    protected $primaryKey ='id';
    use HasFactory;
    protected $fillable = [
        'id',
        'product_id',
        'price',
        'price_base',
        'service_id',
    ];
    // public static function search($search){
    //     return empty($search) ? static::query()
    //     :static::query()->where('fullname','like','%'.$search.'%')->get();
    // }
}
