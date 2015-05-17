<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('backend/ref_agama', 'Backend\Baa\RefAgamaController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_agama.index',
			'create'	=> 'backend_ref_agama.create',
			'update'	=> 'backend_ref_agama.update',
			'store'		=> 'backend_ref_agama.store',
			'edit'		=> 'backend_ref_agama.edit',
			'destroy'	=> 'backend_ref_agama.destroy'
		]]);

});


