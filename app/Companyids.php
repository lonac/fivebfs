<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyids extends Model
{
    protected $fillable = [

    'company_id',
    'staff_id',
    ];

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }

    public function rolestaff()
    {
    	return $this->belongsTo('App\RoleStaff');
    }
}
