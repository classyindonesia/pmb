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
 
	get('backend/pendaftaran/view_biodata/{id}', [
		'as'	=> 'operator_pendaftaran.view_biodata',
		'uses'	=> 'Backend\PendaftaranController@view_biodata',
 	]);

	get('backend/pendaftaran/view_berkas/{id}', [
		'as'	=> 'operator_pendaftaran.view_berkas',
		'uses'	=> 'Backend\PendaftaranController@view_berkas',
 	]);


	get('backend/pendaftaran/request_pindah_prodi/{id}', [
		'as'	=> 'operator_pendaftaran.request_pindah_prodi',
		'uses'	=> 'Backend\PendaftaranController@request_pindah_prodi',
 	]);

 	post('backend/pendaftaran/submit_request_pindah_prodi', [
		'uses'	=> 'Backend\Camaba\GantiProdiController@submit_request',
		'as'	=> 'operator_pendaftaran.submit_request_pindah_prodi',
	]);
 

});


