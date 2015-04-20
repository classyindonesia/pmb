<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	get('backend/tes_tulis', [
		'uses'	=> 'Backend\Baa\TesTulisController@index',
		'as'	=> 'baa_tes_tulis.index',
	]);
 


});


