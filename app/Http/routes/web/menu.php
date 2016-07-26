<?php 

Route::group(['namespace' => 'Backend'], function(){
	
	Route::get('menu', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@index',
	    'as'            => 'backend.menu.index'
	]);

	Route::get('menu/child/{parent_id}', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@child',
	    'as'            => 'backend.menu.child'
	]);

	Route::get('menu/edit/{id}', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@edit',
	    'as'            => 'backend.menu.edit'
	]);


	Route::get('menu/add', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@add',
	    'as'            => 'backend.menu.add'
	]);

	Route::post('menu/insert', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@insert',
	    'as'            => 'backend.menu.insert'
	]);

	Route::post('menu/update', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@update',
	    'as'            => 'backend.menu.update'
	]);

	Route::post('menu/delete', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@delete',
	    'as'            => 'backend.menu.delete'
	]);

});


