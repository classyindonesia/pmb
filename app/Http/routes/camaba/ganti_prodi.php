<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	get('ganti_prodi/index', [
		'uses'	=> 'Backend\Camaba\GantiProdiController@index',
		'as'	=> 'ganti_prodi.index',
	]);

 	post('ganti_prodi/submit_request', [
		'uses'	=> 'Backend\Camaba\GantiProdiController@submit_request',
		'as'	=> 'ganti_prodi.submit_request',
	]);

});

