<?php

Route::group(['middleware' => 'hanya_admin'], function(){

		get('backend/data_upload', [
			'uses'	=> 'Backend\Admin\DataUploadCamabaController@index',
			'as'	=> 'data_upload.index'
		]);

		get('backend/data_upload/view_foto/{id}', [
			'uses'	=> 'Backend\Admin\DataUploadCamabaController@view_foto',
			'as'	=> 'data_upload.view_foto'
		]);
 


		get('backend/data_upload/berkas', [
			'uses'	=> 'Backend\Admin\DataUploadCamabaController@berkas',
			'as'	=> 'data_upload.berkas'
		]);
		get('backend/data_upload/view_berkas/{id}', [
			'uses'	=> 'Backend\Admin\DataUploadCamabaController@view_berkas',
			'as'	=> 'data_upload.view_berkas'
		]);

		

});

