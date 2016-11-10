<?php 

Route::group([ 'namespace' => 'Backend',
			   'middleware' => 'hanya_web', 
			   'prefix' => 'menu2'], function(){

	Route::get('/',[
		'as'	=> 'backend.menu2.index',
		'uses'	=> 'Menu2Controller@index'
	]);

	Route::get('add',[
		'as'	=> 'backend.menu2.add',
		'uses'	=> 'Menu2Controller@add'
	]);

	Route::post('insert',[
		'as'	=> 'backend.menu2.insert',
		'uses'	=> 'Menu2Controller@insert'
	]);

	Route::get('edit/{id}',[
		'as'	=> 'backend.menu2.edit',
		'uses'	=> 'Menu2Controller@edit'
	]);

	Route::post('update',[
		'as'	=> 'backend.menu2.update',
		'uses'	=> 'Menu2Controller@update'
	]);

	Route::post('delete',[
		'as'	=> 'backend.menu2.delete',
		'uses'	=> 'Menu2Controller@delete'
	]);

});