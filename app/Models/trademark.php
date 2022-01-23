<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trademark extends Model
{
    public $table = "trademarks";
    protected $primaryKey ='id';
    use HasFactory;
    protected $fillable = [
        'id',
        'trademark_name',
	'trandemark_name',
        'value',
        
    ];
    // public function price(){
    //     return $this->hasOne(Price::class,'service_id','id');
    // }
}
