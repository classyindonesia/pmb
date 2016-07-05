<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

		Route::get('camaba/edit_biodata', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@edit_biodata',
			'as'	=> 'camaba.edit_biodata'
		]);


		Route::post('camaba/update_biodata', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@update_biodata',
			'as'	=> 'camaba.update_biodata'
		]);



 



		Route::get('camaba/edit_prodi', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@edit_prodi',
			'as'	=> 'camaba.edit_prodi'
		]);
		Route::post('camaba/update_prodi', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@update_prodi',
			'as'	=> 'camaba.update_prodi'
		]);



		/* step 3, photo */
		Route::get('camaba/upload_foto', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@upload_foto',
			'as'	=> 'camaba.upload_foto'
		]);
		Route::post('camaba/do_upload_foto', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@do_upload_foto',
			'as'	=> 'camaba.do_upload_foto'
		]);


		Route::get('camaba/ambil_foto_webcam', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@ambil_foto_webcam',
			'as'	=> 'camaba.ambil_foto_webcam'
		]);
		Route::post('camaba/do_upload_webcam', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@do_upload_webcam',
			'as'	=> 'camaba.do_upload_webcam'
		]);





		/* step 3, berkas */
		Route::get('camaba/upload_berkas', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@upload_berkas',
			'as'	=> 'camaba.upload_berkas'
		]);

		Route::get('camaba/upload_surat_keterangan_lulus', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@upload_surat_keterangan_lulus',
			'as'	=> 'camaba.upload_surat_keterangan_lulus'
		]);



		Route::post('camaba/do_upload_berkas', [
			'uses'	=> 'Backend\Camaba\PendaftaranController@do_upload_berkas',
			'as'	=> 'camaba.do_upload_berkas'
		]);

});

