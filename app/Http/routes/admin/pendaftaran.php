<?php
Route::group(['middleware' => 'hanya_admin'], function(){

	Route::get('data_pendaftaran', [
		'uses'	=> 'Backend\Admin\PendaftaranController@pendaftaran_camaba',
		'as'	=> 'admin_data_pendaftaran.pendaftaran_camaba',
	]);

	Route::get('data_pendaftaran/online', [
		'uses'	=> 'Backend\Admin\PendaftaranController@pendaftaran_camaba_online',
		'as'	=> 'admin_data_pendaftaran.pendaftaran_camaba_online',
	]);

	Route::get('data_pendaftaran/offline', [
		'uses'	=> 'Backend\Admin\PendaftaranController@pendaftaran_camaba_offline',
		'as'	=> 'admin_data_pendaftaran.pendaftaran_camaba_offline',
	]);



	Route::get('data_pendaftaran/kirim_sms/{id}', [
		'uses'	=> 'Backend\Admin\PendaftaranController@kirim_sms',
		'as'	=> 'admin_data_pendaftaran.kirim_sms',
	]);	

	Route::post('data_pendaftaran/do_kirim_sms/', [
		'uses'	=> 'Backend\Admin\PendaftaranController@do_kirim_sms',
		'as'	=> 'admin_data_pendaftaran.do_kirim_sms',
	]);	

 
 
	Route::get('data_pendaftaran/view_biodata/{id}', [
		'uses'	=> 'Backend\Admin\PendaftaranController@view_biodata',
		'as'	=> 'admin_data_pendaftaran.view_biodata',
 	]);

	Route::get('data_pendaftaran/view_berkas/{id}', [
		'uses'	=> 'Backend\Admin\PendaftaranController@view_berkas',
		'as'	=> 'admin_data_pendaftaran.view_berkas',
 	]);

 
	Route::get('data_pendaftaran/export_data', [
		'uses'	=> 'Backend\Admin\PendaftaranController@export_data',
		'as'	=> 'admin_data_pendaftaran.export_data',
 	]);
 
	Route::post('data_pendaftaran/delete', [
		'uses'	=> 'Backend\Admin\PendaftaranController@delete',
		'as'	=> 'admin_data_pendaftaran.delete',
 	]);
 

});


