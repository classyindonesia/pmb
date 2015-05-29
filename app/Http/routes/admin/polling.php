<?php
Route::group(['middleware' => 'hanya_admin'], function(){

	get('backend/polling', [
		'uses'	=> 'Backend\Admin\PollingController@index',
		'as'	=> 'admin_polling.index',
	]);
 

});


