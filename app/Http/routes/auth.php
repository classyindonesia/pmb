<?php
Route::post('auth/login', [
	'uses'			=> 'Auth\LoginController@do_login',
	'as'			=> 'auth.do_login',
	'middleware'	=> 'guest',
	]);

Route::get('auth/login', [
	'uses'			=> 'Auth\LoginController@login',
	'as'			=> 'auth.login',
	]);


Route::get('auth/logout', [
	'uses'			=> 'Auth\LoginController@getLogout',
	'as'			=> 'auth.getLogout',
	'middleware'	=> 'auth',
	]);


Route::get('do_fb_login',  [
	'uses' => 'Auth\LoginController@do_fb_login',
	'as'	=> 'do_fb_login'
]);