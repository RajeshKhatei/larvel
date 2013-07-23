<?php

class Student extends Eloquent {
	public static $table = 'students';

	public static $rules = array(
		'name'=>'required|min:10',
		'phone'=>'required|numeric',
		'city'=>'required|min:2',
		'branch'=>'required',
		'professor'=>'required'
	);

	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}
}