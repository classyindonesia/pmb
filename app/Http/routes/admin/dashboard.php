<?php
Route::group(['middleware' => 'auth'], function(){

	get('home', [
	 		'uses' => 'Backend\DashboardController@index',
			'as'	=> 'admin_dashboard.index'
			]
		);

	get('home/dashboard', [
	 		'uses' => 'Backend\DashboardController@index'
			]
		);
	get('backend', [
	 		'uses' => 'Backend\DashboardController@index',
			'as'	=> 'admin_dashboard.index'
			]
		);

	get('backend/operator/view_statistik/{ref_gelombang_id}', [
	 		'uses' => 'Backend\DashboardController@view_statistik',
			'as'	=> 'admin_dashboard.view_statistik'
			]
		);


 
});




