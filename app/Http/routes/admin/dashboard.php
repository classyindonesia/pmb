<?php

get('home', [
		'middleware' => 'auth', 
		'uses' => 'Backend\DashboardController@index',
		'as'	=> 'admin_dashboard.index'
		]
	);

get('home/dashboard', [
		'middleware' => 'auth', 
		'uses' => 'Backend\DashboardController@index'
		]
	);
