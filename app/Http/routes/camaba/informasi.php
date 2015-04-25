<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	get('backend/informasi', [
		'uses'	=> 'Backend\Camaba\InformasiController@index',
		'as'	=> 'informasi.index',
	]);

 

});

