<?php
Route::group(['middleware' => 'hanya_operator'], function(){

	get('backend/pendaftaran_camaba', [
		'uses'	=> 'Backend\PendaftaranController@pendaftaran_camaba',
		'as'	=> 'admin_pendaftaran.pendaftaran_camaba',
	]);

	get('backend/pendaftaran', [
		'as'	=> 'operator_pendaftaran.index',
		'uses'	=> 'Backend\PendaftaranController@index',
 	]);

	post('backend/pendaftaran/store', [
		'as'	=> 'operator_pendaftaran.store',
		'uses'	=> 'Backend\PendaftaranController@store',
 	]);
 
});


