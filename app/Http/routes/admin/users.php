<?php

Route::get('users', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@index',
		'as'	=> 'admin_users.index'
		]
	);

Route::get('users/add', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@add',
		'as'	=> 'admin_users.add'
		]
	);


Route::post('users/insert', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@insert',
		'as'	=> 'admin_users.insert'
		]
	);

Route::post('users/del', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@del',
		'as'	=> 'admin_users.del'
		]
	);


Route::get('users/edit/{id}', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@edit',
		'as'	=> 'admin_users.edit'
		]
	);

Route::post('users/update', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@update',
		'as'	=> 'admin_users.update'
		]
	);

Route::post('users/reset_password', [
		'middleware' => 'hanya_admin', 
		'uses' => 'Backend\UserController@reset_password',
		'as'	=> 'admin_users.reset_password'
		]
	);
