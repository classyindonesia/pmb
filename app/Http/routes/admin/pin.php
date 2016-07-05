<?php

Route::get('pin', [
	'uses'			=> 'Backend\PinController@index',
	'as'			=> 'admin_pin.index',
	'middleware'	=> 'hanya_admin'
]);

Route::get('pin/generate', [
	'uses'			=> 'Backend\PinController@generate',
	'as'			=> 'admin_pin.generate',
	'middleware'	=> 'hanya_admin'
]);


Route::get('pin/create', [
	'uses'			=> 'Backend\PinController@create',
	'as'			=> 'admin_pin.create',
	'middleware'	=> 'hanya_admin'
]);


Route::get('pin/statistik', [
	'uses'			=> 'Backend\PinController@statistik',
	'as'			=> 'admin_pin.statistik',
	'middleware'	=> 'hanya_admin'
]);


Route::post('pin/store', [
	'uses'			=> 'Backend\PinController@store',
	'as'			=> 'admin_pin.store',
	'middleware'	=> 'hanya_admin'
]);


Route::post('pin/do_generate', [
	'uses'			=> 'Backend\PinController@do_generate',
	'as'			=> 'admin_pin.do_generate',
	'middleware'	=> 'hanya_admin'
]);

Route::post('pin/submit_search', [
	'uses'			=> 'Backend\PinController@submit_search',
	'as'			=> 'admin_pin.submit_search',
	'middleware'	=> 'hanya_admin'
]);


Route::delete('pin/{id}/destroy', [
	'uses'			=> 'Backend\PinController@destroy',
	'as'			=> 'admin_pin.destroy',
	'middleware'	=> 'hanya_admin'
]);

