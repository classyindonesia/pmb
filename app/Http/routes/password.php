<?php
 
Route::group(['namespace' => 'Auth'], function(){

	Route::get('password/email', [
		'uses'	=> 'ResetPasswordsController@getEmail'
	]);

	Route::post('password/email', [
		'uses'	=> 'ResetPasswordsController@postEmail'
	]);

	Route::get('password/reset', [
		'uses'	=> 'ResetPasswordsController@getReset'
	]);

	Route::post('password/reset', [
		'uses'	=> 'ResetPasswordsController@getReset'
	]);

});
