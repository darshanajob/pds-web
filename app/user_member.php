<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_member extends Model
{
    protected $table = 'user_member';


    protected $fillable = [
        'name', 'gender', 'civilstatus','nic','email','gsdivision','tpLand','tpMobile','address','dtype'
    ];
}
