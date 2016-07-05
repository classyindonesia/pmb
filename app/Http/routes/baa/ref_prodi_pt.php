<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('ref_prodi_pt', 'Backend\Baa\RefProdiPtController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_prodi_pt.index',
			'create'	=> 'backend_ref_prodi_pt.create',
			'update'	=> 'backend_ref_prodi_pt.update',
			'store'		=> 'backend_ref_prodi_pt.store',
			'edit'		=> 'backend_ref_prodi_pt.edit',
			'destroy'	=> 'backend_ref_prodi_pt.destroy'
		]]);

});


