<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class building_app extends Model
{
    protected $table = 'building_app';
    protected $fillable = [
        'id',
       'v_name',
       'v_address',
       'v_tp',
       'location',
       'accesss_tax_no',


];
}
