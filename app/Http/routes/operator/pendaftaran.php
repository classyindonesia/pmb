<?php
Route::group(['middleware' => 'hanya_operator'], function(){

	get('backend/pendaftaran_camaba', [
		'uses'	=> 'Backend\PendaftaranController@pendaftaran_camaba',
		'as'	=> 'admin_pendaftaran.pendaftaran_camaba',
	]);

	get('backend/pendaftaran_camaba/online', [
		'uses'	=> 'Backend\PendaftaranController@pendaftaran_camaba_online',
		'as'	=> 'admin_pendaftaran.pendaftaran_camaba_online',
	]);

	get('backend/pendaftaran_camaba/offline', [
		'uses'	=> 'Backend\PendaftaranController@pendaftaran_camaba_offline',
		'as'	=> 'admin_pendaftaran.pendaftaran_camaba_offline',
	]);



	get('backend/pendaftaran_camaba/kirim_sms/{id}', [
		'uses'	=> 'Backend\PendaftaranController@kirim_sms',
		'as'	=> 'admin_pendaftaran.kirim_sms',
	]);	

	post('backend/pendaftaran_camaba/do_kirim_sms/', [
		'uses'	=> 'Backend\PendaftaranController@do_kirim_sms',
		'as'	=> 'admin_pendaftaran.do_kirim_sms',
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


