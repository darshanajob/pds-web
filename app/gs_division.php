<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gs_division extends Model
{
	protected $table = 'gs_division';
    protected $fillable = [
        'id', 'no', 'name'
    ];
}
