<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('ref_ukuran_almamater', 'Backend\Baa\RefUkuranAlmamaterController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'backend_ref_ukuran_almamater.index',
			'create'	=> 'backend_ref_ukuran_almamater.create',
			'update'	=> 'backend_ref_ukuran_almamater.update',
			'store'		=> 'backend_ref_ukuran_almamater.store',
			'edit'		=> 'backend_ref_ukuran_almamater.edit',
			'destroy'	=> 'backend_ref_ukuran_almamater.destroy'
		]]);

});


