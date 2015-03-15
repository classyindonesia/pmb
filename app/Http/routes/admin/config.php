<?php

get('backend/config', [
		'middleware' => 'hanya_admin', 
		'as'		=> 'admin_config.index',
		'uses' => 'Backend\ConfigController@index'
		]
	);

post('backend/config/update', [
		'middleware' => 'hanya_admin', 
		'as'		=> 'admin_config.update',
		'uses' => 'Backend\ConfigController@update'
		]
	);
