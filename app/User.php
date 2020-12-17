<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Role;
use App\User;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $uploads = '/img/';

    protected $fillable = [
        'name', 'email', 'password','img','is_acitve','role_id','user_no',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Role(){
        return $this->belongsTo('App\Role');
    }

    public function isOfficer(){

        if($this->role->name == "Officer"){
            return true;
        }
        return false;
    }

    public function isAdmin(){

        if($this->role->name == "Administrator"){
            return true;
        }
        return false;
    }


}
