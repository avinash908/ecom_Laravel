<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInfo extends Model
{
    // use SoftDeletes;
    
	protected $fillable = [
		 'user_id', 'first_name', 'last_name', 'phone', 'address','city_id', 'state_id', 'country_id',
	];
    public function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
    public function city()
    {
    	return $this->belongsTo('App\City');
    }
    public function state()
    {
    	return $this->belongsTo('App\State');
    }
    public function country()
    {
    	return $this->belongsTo('App\Country');
    }
}
