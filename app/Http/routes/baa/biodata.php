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

 
});


