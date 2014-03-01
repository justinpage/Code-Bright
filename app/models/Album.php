<?php

class Album extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function artist()
	{
		return $this->belongsTo('Artist');
	}

	public function listeners()
	{
		return $this->belongsToMany('Listener');
	}
}
