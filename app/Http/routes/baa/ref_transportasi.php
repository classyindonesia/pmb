<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('ref_transportasi', 'Backend\Baa\RefTransportasiController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_transportasi.index',
			'create'	=> 'backend_ref_transportasi.create',
			'update'	=> 'backend_ref_transportasi.update',
			'store'		=> 'backend_ref_transportasi.store',
			'edit'		=> 'backend_ref_transportasi.edit',
			'destroy'	=> 'backend_ref_transportasi.destroy'
		]]);

});


