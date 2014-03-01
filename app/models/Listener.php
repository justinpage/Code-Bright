<?php

class Listener extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public function albums()
	{
		return $this->belongsToMany('Album');
	}
}
