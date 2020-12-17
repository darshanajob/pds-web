<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galary_imageA extends Model
{
    protected $table = 'images';


    protected $fillable = [
        'id', 'name', 'type_m','des', 'img',
    ];
}
