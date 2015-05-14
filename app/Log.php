<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model {

	protected $hidden = ['user_id'];

	public function scopeFood_Emotion($q)
	{
		return $q->with('foods')->with('emotions');
	}

	public function foods() {
		return $this->belongsToMany('App\Food')->select('id', 'food');
	}

	public function emotions() {
		return $this->belongsToMany('App\Emotion')->select('id', 'emotion');
	}

}
