<?php
Route::group(['middleware' => 'hanya_admin'], function(){

	get('backend/foto_slide_utama', [
		'uses'	=> 'Backend\Admin\LogController@index',
		'as'	=> 'foto_slide_utama.index',
	]);
 

});


