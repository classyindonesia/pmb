<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	get('validasi_pendaftaran', [
		'uses'	=> 'Backend\Camaba\ValidasiPendaftaranController@index',
		'as'	=> 'validasi_pendaftaran.index',
	]);


});

