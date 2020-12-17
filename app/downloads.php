<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class downloads extends Model
{
    protected $table = 'downloads';
	protected $fillable = [
           'id',
           'name',
           'type',
           'path',
           'category',
           'medium'
    ];
}
