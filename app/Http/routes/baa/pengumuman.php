<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	get('backend/pengumuman', [
		'uses'	=> 'Backend\Baa\PengumumanController@index',
		'as'	=> 'pengumuman.index',
	]);



	get('backend/pengumuman/create', [
		'uses'	=> 'Backend\Baa\PengumumanController@create',
		'as'	=> 'pengumuman.create',
	]);


	post('backend/pengumuman/insert', [
		'uses'	=> 'Backend\Baa\PengumumanController@insert',
		'as'	=> 'pengumuman.insert',
	]);

	post('backend/pengumuman/delete', [
		'uses'	=> 'Backend\Baa\PengumumanController@delete',
		'as'	=> 'pengumuman.delete',
	]);


	get('backend/pengumuman/edit/{id}', [
		'uses'	=> 'Backend\Baa\PengumumanController@edit',
		'as'	=> 'pengumuman.edit',
	]);

	post('backend/pengumuman/update', [
		'uses'	=> 'Backend\Baa\PengumumanController@update',
		'as'	=> 'pengumuman.update',
	]);	

	get('backend/pengumuman/import', [
		'uses'	=> 'Backend\Baa\PengumumanController@import',
		'as'	=> 'pengumuman.import',
	]);

	post('backend/pengumuman/do_import', [
		'uses'	=> 'Backend\Baa\PengumumanController@do_import',
		'as'	=> 'pengumuman.do_import',
	]);


	get('backend/pengumuman/export_pdf', [
		'uses'	=> 'Backend\Baa\PengumumanController@export_pdf',
		'as'	=> 'pengumuman.export_pdf',
	]);

});


