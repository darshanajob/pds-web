<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enaviron_protect extends Model
{
    protected $table = 'enaviron_protect';
    protected $fillable = [
           'id',
           'industry_name',
           'reg_name',
           'reg_address',
           'industry_detail',
           'industry_location',
           'industry_address',
           'industry_zone',
           'investment_local',
           'investment_foreign',
           'version',





    ];
}
