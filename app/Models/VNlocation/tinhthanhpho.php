<?php

namespace App\Models\VNlocation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinhthanhpho extends Model
{
    public $table = "tinhthanhpho";

    protected $primaryKey ='matp';
    use HasFactory;
    protected $fillable = [
        'matp',
        'name',
    ];
}
