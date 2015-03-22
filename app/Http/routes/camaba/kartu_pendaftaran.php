<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	get('kartu_pendaftaran', [
		'uses'	=> 'Backend\Camaba\KartuPendaftaranController@index',
		'as'	=> 'kartu_pendaftaran.index',
	]);

	get('kartu_pendaftaran/cetak', [
		'uses'	=> 'Backend\Camaba\KartuPendaftaranController@cetak',
		'as'	=> 'kartu_pendaftaran.cetak',
	]); 


});

