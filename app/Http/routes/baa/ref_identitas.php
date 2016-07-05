<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('ref_identitas', 'Backend\Baa\RefIdentitasController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_identitas.index',
			'create'	=> 'backend_ref_identitas.create',
			'update'	=> 'backend_ref_identitas.update',
			'store'		=> 'backend_ref_identitas.store',
			'edit'		=> 'backend_ref_identitas.edit',
			'destroy'	=> 'backend_ref_identitas.destroy'
		]]);

});


