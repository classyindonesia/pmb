<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('ref_ruang', 'Backend\Baa\RefRuangController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'baa_ref_ruang.index',
			'create'	=> 'baa_ref_ruang.create',
			'update'	=> 'baa_ref_ruang.update',
			'store'		=> 'baa_ref_ruang.store',
			'edit'		=> 'baa_ref_ruang.edit',
			'destroy'	=> 'baa_ref_ruang.destroy'
		]]);

});


