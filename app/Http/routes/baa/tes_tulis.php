<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	get('backend/tes_tulis', [
		'uses'	=> 'Backend\Baa\TesTulisController@index',
		'as'	=> 'baa_tes_tulis.index',
	]);



	get('backend/tes_tulis/create', [
		'uses'	=> 'Backend\Baa\TesTulisController@create',
		'as'	=> 'baa_tes_tulis.create',
	]);


	post('backend/tes_tulis/insert', [
		'uses'	=> 'Backend\Baa\TesTulisController@insert',
		'as'	=> 'baa_tes_tulis.insert',
	]);

	post('backend/tes_tulis/delete', [
		'uses'	=> 'Backend\Baa\TesTulisController@delete',
		'as'	=> 'baa_tes_tulis.delete',
	]);


	get('backend/tes_tulis/edit/{id}', [
		'uses'	=> 'Backend\Baa\TesTulisController@edit',
		'as'	=> 'baa_tes_tulis.edit',
	]);

	post('backend/tes_tulis/update', [
		'uses'	=> 'Backend\Baa\TesTulisController@update',
		'as'	=> 'baa_tes_tulis.update',
	]);	

	get('backend/tes_tulis/import', [
		'uses'	=> 'Backend\Baa\TesTulisController@import',
		'as'	=> 'baa_tes_tulis.import',
	]);

	post('backend/tes_tulis/do_import', [
		'uses'	=> 'Backend\Baa\TesTulisController@do_import',
		'as'	=> 'baa_tes_tulis.do_import',
	]);

	get('backend/tes_tulis/export_pdf', [
		'uses'	=> 'Backend\Baa\TesTulisController@export_pdf',
		'as'	=> 'baa_tes_tulis.export_pdf',
	]);


});


