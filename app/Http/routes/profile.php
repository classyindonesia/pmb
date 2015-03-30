<?php
Route::group(['middleware' => 'auth'], function(){

	get('backend/profile', [
		'uses'	=> 'Backend\ProfileController@index',
		'as'	=> 'backend_profile.index',
	]);
 
 	post('backend/profile/update_password', [
		'uses'	=> 'Backend\ProfileController@update_password',
		'as'	=> 'backend_profile.update_password',
	]);
});


