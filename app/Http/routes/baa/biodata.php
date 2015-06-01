<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	get('backend/biodata', [
		'uses'	=> 'Backend\Baa\BiodataController@index',
		'as'	=> 'backend_biodata.index',
	]);

	get('backend/biodata/edit/{mst_pendaftaran_id}', [
		'uses'	=> 'Backend\Baa\BiodataController@edit',
		'as'	=> 'backend_biodata.edit',
	]);

	post('backend/biodata/update', [
		'uses'	=> 'Backend\Baa\BiodataController@update',
		'as'	=> 'backend_biodata.update',
	]);	

 
	post('backend/biodata/validasi', [
		'uses'	=> 'Backend\Baa\BiodataController@validasi',
		'as'	=> 'backend_biodata.validasi',
	]);	


	get('backend/biodata/cetak_pdf/{id}', [
		'uses'	=> 'Backend\Baa\BiodataController@cetak_pdf',
		'as'	=> 'backend_biodata.cetak_pdf',
	]);



 
	get('backend/biodata/get_prodi_pt/{ref_perguruan_tinggi_id}/{mst_pendaftaran_id}', [
		'uses'	=> 'Backend\Baa\BiodataController@get_prodi_pt',
		'as'	=> 'backend_biodata.get_prodi_pt',
	]);	


});


