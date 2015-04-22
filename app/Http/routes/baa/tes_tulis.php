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




});


