<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    	'name',
    	'description',
        'line_one',
        'line_two',
        'phone1',
        'phone2',
        'capital',
        'email',
    	'user_id',
    ];

    public function ceo()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function loans()
    {
    	return $this->hasMany('App\Loan');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function stakeholders()
    {
        return $this->hasMany('App\StakeHolder');
    }

    public function companyfiles()
    {
        return $this->hasOne('App\CompanyFile');
    }

    public function roles()
    {
        return $this->hasMany('App\RoleStaff');
    }

    public function companyIDs()
    {
        return $this->hasMany('App\CompanyIDs');
    }
}
