<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $table = "image";
    protected $primaryKey ='id';
    use HasFactory;
    protected $fillable = [
        'id',
        'link',
        'cate_pro_id',
    ];
    public static function findImg($pro_cate_id){ 
        $imges = Image::where('cate_pro_id',$pro_cate_id)->get();
        return $imges;
    }
}
