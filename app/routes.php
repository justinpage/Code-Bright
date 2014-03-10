<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/user', function()
{
	return View::make('create_user_form');
});

Route::post('/user', function()
{
	$user = new User;
	$user->username = Input::get('username');
	$user->password = Hash::make(Input::get('password'));
	$user->email = Input::get('email');
	$user->save();	

	return Response::make('User created! Hurray!');
});

Route::get('/crush', function()
	{
		if (Auth::check()) return View::make('crush')->with('username', Auth::user()->username);
		return View::make('hello');
	}
)->before('auth');

Route::get('/logout', function()
{
	Auth::logout();
	return Redirect::to('/');
});

Route::get('/login', function()
{
	return View::make('login_form');
});

Route::post('/login', function()
{
	$credentials = Input::only('username', 'password');
	$remember = Input::has('remember');
	if (Auth::attempt($credentials, $remember)) {
		return Redirect::intended('/');
	}

	return Redirect::to('login');
});

