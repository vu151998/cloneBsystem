<?php

namespace App\Models\Vnlocation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class xaphuongthitran extends Model
{
    public $table = "xaphuongthitran";
    protected $primaryKey ='xaid';
    use HasFactory;
    protected $fillable = [
        'xaid',
        'name',
        'maqh',
    ];

    public function quanhuyen()
    {
        return $this->belongsTo(quanhuyen::class,'maqh');
    }
}
