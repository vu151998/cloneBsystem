<?php

namespace App\Models\Vnlocation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quanhuyen extends Model
{
    public $table = "quanhuyen";
    protected $primaryKey ='maqh';
    use HasFactory;
    protected $fillable = [
        'matp',
        'maqh',
        'name',
    ];

    public function xaphuongthitran()
    {
        return $this->hasMany(xaphuongthitran::class);
    }

    public function tinhthanhpho()
    {
        return $this->belongsTo(tinhthanhpho::class,'matp');
    }
}
