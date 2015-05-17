<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	get('backend/biodata', [
		'uses'	=> 'Backend\Baa\BiodataController@index',
		'as'	=> 'backend_biodata.index',
	]);


 
});


