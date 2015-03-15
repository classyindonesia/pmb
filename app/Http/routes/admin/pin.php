<?php

get('backend/pin', [
	'uses'			=> 'Backend\PinController@index',
	'as'			=> 'admin_pin.index',
	'middleware'	=> 'hanya_admin'
]);

get('backend/pin/generate', [
	'uses'			=> 'Backend\PinController@generate',
	'as'			=> 'admin_pin.generate',
	'middleware'	=> 'hanya_admin'
]);


get('backend/pin/create', [
	'uses'			=> 'Backend\PinController@create',
	'as'			=> 'admin_pin.create',
	'middleware'	=> 'hanya_admin'
]);


post('backend/pin/store', [
	'uses'			=> 'Backend\PinController@store',
	'as'			=> 'admin_pin.store',
	'middleware'	=> 'hanya_admin'
]);


post('backend/pin/do_generate', [
	'uses'			=> 'Backend\PinController@do_generate',
	'as'			=> 'admin_pin.do_generate',
	'middleware'	=> 'hanya_admin'
]);

post('backend/pin/submit_search', [
	'uses'			=> 'Backend\PinController@submit_search',
	'as'			=> 'admin_pin.submit_search',
	'middleware'	=> 'hanya_admin'
]);

