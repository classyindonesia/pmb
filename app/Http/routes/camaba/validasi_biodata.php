<?php

Route::group(['middleware' => 'hanya_camaba'], function(){

	get('backend/validasi_biodata', [
		'uses'	=> 'Backend\Camaba\ValidasiBiodataController@index',
		'as'	=> 'backend_validasi_biodata.index',
	]);

 

});

