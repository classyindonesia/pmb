<?php
Route::group(['middleware' => 'auth'], function(){

	Route::get('/', [
	 		'uses' => 'Backend\DashboardController@index',
			'as'	=> 'admin_dashboard.index'
			]
		);

	Route::get('/operator/view_statistik/{ref_gelombang_id}', [
	 		'uses' => 'Backend\DashboardController@view_statistik',
			'as'	=> 'admin_dashboard.view_statistik'
			]
		);


	Route::get('home', [
	 		'uses' => 'Backend\DashboardController@index',
			'as'	=> 'admin_dashboard.index'
			]
		);

	Route::get('home/dashboard', [
	 		'uses' => 'Backend\DashboardController@index'
			]
		);



 
});




