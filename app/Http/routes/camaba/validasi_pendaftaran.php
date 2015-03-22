<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	get('validasi_pendaftaran', [
		'uses'	=> 'Backend\Camaba\ValidasiPendaftaranController@index',
		'as'	=> 'validasi_pendaftaran.index',
	]);

	post('validasi_pendaftaran/do_validasi', [
		'uses'	=> 'Backend\Camaba\ValidasiPendaftaranController@do_validasi',
		'as'	=> 'validasi_pendaftaran.do_validasi',
	]);


});

