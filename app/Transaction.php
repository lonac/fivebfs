<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable=[
    	'user_id',
    	'company_id',
    	'capital',
    	'firstname',
    	'lastname',
        'sendtransactionId',
    	'takeDate',
    	'retDate',
    	'takeAmount',
    	'retAmount',
    	'totalAmount',
    	'rectransactionId',
        'status',
        'descriptions'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
