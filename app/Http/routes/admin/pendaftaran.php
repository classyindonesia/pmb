<?php

Route::group(['middleware' => 'hanya_admin'], function(){

	get('backend/pendaftaran_camaba', [
		'uses'	=> 'Backend\Admin\PendaftaranController@index',
		'as'	=> 'admin_pendaftaran.index',
	]);

 
});

