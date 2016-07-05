<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	Route::get('biodata', [
		'uses'	=> 'Backend\Baa\BiodataController@index',
		'as'	=> 'backend_biodata.index',
	]);

	Route::get('biodata/edit/{mst_pendaftaran_id}', [
		'uses'	=> 'Backend\Baa\BiodataController@edit',
		'as'	=> 'backend_biodata.edit',
	]);

	Route::post('biodata/update', [
		'uses'	=> 'Backend\Baa\BiodataController@update',
		'as'	=> 'backend_biodata.update',
	]);	

 
	Route::post('biodata/validasi', [
		'uses'	=> 'Backend\Baa\BiodataController@validasi',
		'as'	=> 'backend_biodata.validasi',
	]);	


	Route::get('biodata/cetak_pdf/{id}', [
		'uses'	=> 'Backend\Baa\BiodataController@cetak_pdf',
		'as'	=> 'backend_biodata.cetak_pdf',
	]);



 
	Route::get('biodata/Route::get_prodi_pt/{ref_perguruan_tinggi_id}/{mst_pendaftaran_id}', [
		'uses'	=> 'Backend\Baa\BiodataController@Route::get_prodi_pt',
		'as'	=> 'backend_biodata.Route::get_prodi_pt',
	]);	


});


