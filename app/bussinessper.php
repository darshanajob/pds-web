<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bussinessper extends Model
{
     protected $table = 'bussinessper';
    protected $fillable = [
           'id',
           'name',
           'p_address',
           'p_phonenm',
           'p_fax',
           'p_email',
           'B_name',
           'B_address',
           'b_phoneno',
           'b_fax',
           'b_email',
           'land_owner',
           'lyear_permit_tax',
           'lyear_permit_No',
           'lyear_receptNO',
           'nature',
           'No_of_emp',
           'created_at',
           'updated_at',
           'status'




    ];
}
