<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleStaff extends Model
{
    protected $fillable = [
    	'company_id',
    	'staff_id',
    	'firstname',
    	'lastname',
    	'roles',
    	'password',
    ];

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
