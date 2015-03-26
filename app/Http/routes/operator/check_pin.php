<?php
Route::group(['middleware' => 'hanya_operator'], function(){

	get('backend/check_pin', [
		'uses'	=> 'Backend\CheckPinController@index',
		'as'	=> 'check_pin.index',
	]);
 
 
});


