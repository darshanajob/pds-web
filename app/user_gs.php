<?php
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
namespace App;

use Illuminate\Database\Eloquent\Model;

class user_gs extends Model
{
    protected $table = 'user_gs';


    protected $fillable = [
        'name', 'gender', 'civilstatus','nic','email','gsdivision','tpLand','tpMobile','address'
    ];
}
