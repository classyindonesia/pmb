<?php

Route::group(['middleware' => 'hanya_admin'], function(){

	Route::get('request_pergantian_prodi', [
		'uses'	=> 'Backend\GantiProdiController@index',
		'as'	=> 'request_pergantian_prodi.index',
	]);
 


	Route::get('request_pergantian_prodi/popup_request/{id}', [
		'uses'	=> 'Backend\GantiProdiController@popup_request',
		'as'	=> 'request_pergantian_prodi.popup_request',
	]);

	Route::post('request_pergantian_prodi/submit_request', [
		'uses'	=> 'Backend\GantiProdiController@submit_request',
		'as'	=> 'request_pergantian_prodi.submit_request',
	]);


});

