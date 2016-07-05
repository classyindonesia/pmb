<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	Route::get('informasi', [
		'uses'	=> 'Backend\Camaba\InformasiController@index',
		'as'	=> 'informasi.index',
	]);

 

});

