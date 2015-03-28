<?php

get('backend/users', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@index',
		'as'	=> 'admin_users.index'
		]
	);

get('backend/users/add', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@add',
		'as'	=> 'admin_users.add'
		]
	);


post('backend/users/insert', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@insert',
		'as'	=> 'admin_users.insert'
		]
	);

post('backend/users/del', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@del',
		'as'	=> 'admin_users.del'
		]
	);


get('backend/users/edit/{id}', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@edit',
		'as'	=> 'admin_users.edit'
		]
	);

post('backend/users/update', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@update',
		'as'	=> 'admin_users.update'
		]
	);

post('backend/users/reset_password', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@reset_password',
		'as'	=> 'admin_users.reset_password'
		]
	);
