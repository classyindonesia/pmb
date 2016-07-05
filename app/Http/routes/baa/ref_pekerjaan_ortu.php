<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('ref_pekerjaan_ortu', 'Backend\Baa\RefPekerjaanOrtuController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_pekerjaan_ortu.index',
			'create'	=> 'backend_ref_pekerjaan_ortu.create',
			'update'	=> 'backend_ref_pekerjaan_ortu.update',
			'store'		=> 'backend_ref_pekerjaan_ortu.store',
			'edit'		=> 'backend_ref_pekerjaan_ortu.edit',
			'destroy'	=> 'backend_ref_pekerjaan_ortu.destroy'
		]]);

});


