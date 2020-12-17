<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galary_image extends Model
{
    protected $table = 'galary_image';


    protected $fillable = [
        'id','type', 'img', 'type_m','des','name',
    ];
}
