<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('backend/ref_kota', 'Backend\Baa\RefKotaController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_kota.index',
			'create'	=> 'backend_ref_kota.create',
			'update'	=> 'backend_ref_kota.update',
			'store'		=> 'backend_ref_kota.store',
			'edit'		=> 'backend_ref_kota.edit',
			'destroy'	=> 'backend_ref_kota.destroy'
		]]);

});


