<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_officer extends Model
{
    protected $table = 'user_officer';


    protected $fillable = [
        'name', 'gender', 'civilstatus','nic','email','gsdivision','tpLand','tpMobile','address','dtype'
    ];
}
