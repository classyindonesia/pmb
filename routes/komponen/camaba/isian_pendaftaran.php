<?php 
$data = ['middleware' => [	'auth', 
							'hanya_camaba'
						], 
		 'namespace' => 'Backend',
		 'prefix'	=> 'isian_pendaftaran'
		];
Route::group($data, function(){

	Route::get('/', [
		'as'	=> 'backend.isian_pendaftaran.index',
		'uses'	=> 'IsianPendaftaranController@index'
	]);

});