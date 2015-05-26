<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('backend/ref_perguruan_tinggi', 'Backend\Baa\RefPerguruanTinggiController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_perguruan_tinggi.index',
			'create'	=> 'backend_ref_perguruan_tinggi.create',
			'update'	=> 'backend_ref_perguruan_tinggi.update',
			'store'		=> 'backend_ref_perguruan_tinggi.store',
			'edit'		=> 'backend_ref_perguruan_tinggi.edit',
			'destroy'	=> 'backend_ref_perguruan_tinggi.destroy'
		]]);

});


