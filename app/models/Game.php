<?php

class Game extends Eloquent {

	protected $guarded = array();

	protected $fillable = ['title', 'publisher', 'complete'];

	public static $rules = array(
		'title'     => 'required|unique:games',
		'publisher' => 'required'
	);

	public static $updateRules = array(
		'title'     => 'required',
		'publisher' => 'required'
	);

	public $errors;

	public function isValid($update = false)
	{
		$currentRules = (empty($update)) ? static::$rules : static::$updateRules;
		$validation = Validator::make($this->attributes, $currentRules);

		if ($validation->passes()) return true;

		$this->errors = $validation->messages();

		return false;
	}
}
