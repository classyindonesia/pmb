<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	Route::get('my_poll', [
		'uses'	=> 'Backend\Camaba\PollingController@index',
		'as'	=> 'camaba_polling.index',
	]);

 
	Route::post('my_poll/submit_jawaban', [
		'uses'	=> 'Backend\Camaba\PollingController@submit_jawaban',
		'as'	=> 'camaba_polling.submit_jawaban',
	]);



});

