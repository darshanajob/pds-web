<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'user_role';
    protected $fillable = [
        'id',
       'name',

];
}
