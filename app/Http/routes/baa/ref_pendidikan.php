<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('backend/ref_pendidikan', 'Backend\Baa\RefPendidikanController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_pendidikan.index',
			'create'	=> 'backend_ref_pendidikan.create',
			'update'	=> 'backend_ref_pendidikan.update',
			'store'		=> 'backend_ref_pendidikan.store',
			'edit'		=> 'backend_ref_pendidikan.edit',
			'destroy'	=> 'backend_ref_pendidikan.destroy'
		]]);

});


