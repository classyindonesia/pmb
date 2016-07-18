<?php 

Route::group(['namespace' => 'Backend'], function(){
	
	Route::get('menu', [
	    'middleware'    => 'hanya_web',
	    'uses'          => 'MenuController@index',
	    'as'            => 'backend.menu.index'
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


});


