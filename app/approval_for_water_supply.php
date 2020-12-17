<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approval_for_water_supply extends Model
{
    protected $table = 'approval_for_water_supply';
    protected $fillable = [
        'id',
       'rName',
       'rAddress',
       'rpnum',
       'Reason',
       'Useage',
      'Current_Service',
      'status',
    ];
}
