<?php
Route::group(['middleware' => 'hanya_admin'], function(){

	get('backend/log', [
		'uses'	=> 'Backend\Admin\LogController@index',
		'as'	=> 'admin_log.index',
	]);
 

});


