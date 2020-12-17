<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cut_tree extends Model
{
    protected $table = 'cut_tree'; 
    protected $fillable = [
           'id',
           'reg_name',
           'reg_address',
           'reg_telephone',
           'owner_name',
           'owner_address',
           'road',
           'statement',
           'p_statement', 
           'map',
           'gs_division',
           'treetype',
           'Notree',
           'v_officer', 
           
         
            
    ];
}
