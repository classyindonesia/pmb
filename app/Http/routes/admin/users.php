<?php

get('backend/users', [
		'middleware' => 'auth', 
		'uses' => 'Backend\UserController@index',
		'as'	=> 'admin_users.index'
		]
	);

get('backend/users/add', [
		'middleware' => 'auth', 
		'uses' => 'Backend\UserController@add',
		'as'	=> 'admin_users.add'
		]
	);


post('backend/users/insert', [
		'middleware' => 'auth', 
		'uses' => 'Backend\UserController@insert',
		'as'	=> 'admin_users.insert'
		]
	);

post('backend/users/del', [
		'middleware' => 'auth', 
		'uses' => 'Backend\UserController@del',
		'as'	=> 'admin_users.del'
		]
	);


get('backend/users/edit/{id}', [
		'middleware' => 'auth', 
		'uses' => 'Backend\UserController@edit',
		'as'	=> 'admin_users.edit'
		]
	);

post('backend/users/update', [
		'middleware' => 'auth', 
		'uses' => 'Backend\UserController@update',
		'as'	=> 'admin_users.update'
		]
	);
