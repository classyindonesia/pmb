<?php
Route::group(['middleware' => 'hanya_admin'], function(){

	get('backend/data_pendaftaran', [
		'uses'	=> 'Backend\Admin\PendaftaranController@pendaftaran_camaba',
		'as'	=> 'admin_data_pendaftaran.pendaftaran_camaba',
	]);

	get('backend/data_pendaftaran/online', [
		'uses'	=> 'Backend\Admin\PendaftaranController@pendaftaran_camaba_online',
		'as'	=> 'admin_data_pendaftaran.pendaftaran_camaba_online',
	]);

	get('backend/data_pendaftaran/offline', [
		'uses'	=> 'Backend\Admin\PendaftaranController@pendaftaran_camaba_offline',
		'as'	=> 'admin_data_pendaftaran.pendaftaran_camaba_offline',
	]);



	get('backend/data_pendaftaran/kirim_sms/{id}', [
		'uses'	=> 'Backend\Admin\PendaftaranController@kirim_sms',
		'as'	=> 'admin_data_pendaftaran.kirim_sms',
	]);	

	post('backend/data_pendaftaran/do_kirim_sms/', [
		'uses'	=> 'Backend\Admin\PendaftaranController@do_kirim_sms',
		'as'	=> 'admin_data_pendaftaran.do_kirim_sms',
	]);	

 
 
	get('backend/data_pendaftaran/view_biodata/{id}', [
		'uses'	=> 'Backend\Admin\PendaftaranController@view_biodata',
		'as'	=> 'admin_data_pendaftaran.view_biodata',
 	]);

	get('backend/data_pendaftaran/view_berkas/{id}', [
		'uses'	=> 'Backend\Admin\PendaftaranController@view_berkas',
		'as'	=> 'admin_data_pendaftaran.view_berkas',
 	]);

 
	get('backend/data_pendaftaran/export_data', [
		'uses'	=> 'Backend\Admin\PendaftaranController@export_data',
		'as'	=> 'admin_data_pendaftaran.export_data',
 	]);
 
	post('backend/data_pendaftaran/delete', [
		'uses'	=> 'Backend\Admin\PendaftaranController@delete',
		'as'	=> 'admin_data_pendaftaran.delete',
 	]);
 

});


