<?php
Route::group(['middleware' => 'hanya_admin'], function(){

	get('backend/polling', [
		'uses'	=> 'Backend\Admin\PollingController@index',
		'as'	=> 'admin_polling.index',
	]);
 

	get('backend/polling/create_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@create_pertanyaan',
		'as'	=> 'admin_polling.create_pertanyaan',
	]);

	post('backend/polling/insert_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@insert_pertanyaan',
		'as'	=> 'admin_polling.insert_pertanyaan',
	]);

	get('backend/polling/edit_pertanyaan/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@edit_pertanyaan',
		'as'	=> 'admin_polling.edit_pertanyaan',
	]);


	post('backend/polling/update_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@update_pertanyaan',
		'as'	=> 'admin_polling.update_pertanyaan',
	]);


	post('backend/polling/del_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@del_pertanyaan',
		'as'	=> 'admin_polling.del_pertanyaan',
	]);







	get('backend/polling/pilihan/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@pilihan',
		'as'	=> 'admin_polling.pilihan',
	]);
 

	get('backend/polling/create_pilihan/{mst_pertanyaan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@create_pilihan',
		'as'	=> 'admin_polling.create_pilihan',
	]);

	post('backend/polling/insert_pertanyaan', [
		'uses'	=> 'Backend\Admin\PollingController@insert_pilihan',
		'as'	=> 'admin_polling.insert_pilihan',
	]);

	get('backend/polling/edit_pilihan/{mst_pertanyaan_polling_id}/{mst_pilihan_polling_id}', [
		'uses'	=> 'Backend\Admin\PollingController@edit_pilihan',
		'as'	=> 'admin_polling.edit_pilihan',
	]);


	post('backend/polling/update_pilihan', [
		'uses'	=> 'Backend\Admin\PollingController@update_pilihan',
		'as'	=> 'admin_polling.update_pilihan',
	]);

	post('backend/polling/del_pilihan', [
		'uses'	=> 'Backend\Admin\PollingController@del_pilihan',
		'as'	=> 'admin_polling.del_pilihan',
	]);





});


