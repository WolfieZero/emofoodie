<?php namespace EmoFoodie;

use Illuminate\Database\Eloquent\Model;

class log extends Model {

	public function foods() {
		return $this->belongsToMany('Food');
	}

	public function emotions() {
		return $this->belongsToMany('Emotion');	
	}

}
