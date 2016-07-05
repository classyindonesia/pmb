<?php
Route::group(['middleware' => 'admin_baa'], function(){

	Route::get('polling', [
		'uses'	=> 'Backend\Admin\PollingController@index',
		'as'	=> 'admin_polling.index',
	]);
 

	Route::get('polling/create_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@create_pertanyaan',
		'as'	=> 'admin_polling.create_pertanyaan',
	]);

	Route::post('polling/insert_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@insert_pertanyaan',
		'as'	=> 'admin_polling.insert_pertanyaan',
	]);

	Route::get('polling/edit_pertanyaan/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@edit_pertanyaan',
		'as'	=> 'admin_polling.edit_pertanyaan',
	]);


	Route::post('polling/update_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@update_pertanyaan',
		'as'	=> 'admin_polling.update_pertanyaan',
	]);


	Route::post('polling/del_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@del_pertanyaan',
		'as'	=> 'admin_polling.del_pertanyaan',
	]);







	Route::get('polling/pilihan/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@pilihan',
		'as'	=> 'admin_polling.pilihan',
	]);
 

	Route::get('polling/create_pilihan/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@create_pilihan',
		'as'	=> 'admin_polling.create_pilihan',
	]);

	Route::post('polling/insert_pilihan', [
		'uses'	=> 'Backend\Admin\PollingController@insert_pilihan',
		'as'	=> 'admin_polling.insert_pilihan',
	]);

	Route::get('polling/edit_pilihan/{mst_pertanyaan_polling_id}/{mst_pilihan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@edit_pilihan',
		'as'	=> 'admin_polling.edit_pilihan',
	]);


	Route::post('polling/update_pilihan', [
		'uses'	=> 'Backend\Admin\PollingController@update_pilihan',
		'as'	=> 'admin_polling.update_pilihan',
	]);

	Route::post('polling/del_pilihan', [
		'uses'	=> 'Backend\Admin\PollingController@del_pilihan',
		'as'	=> 'admin_polling.del_pilihan',
	]);



	Route::get('polling/view_hasil/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@view_hasil',
		'as'	=> 'admin_polling.view_hasil',
	]);






});


