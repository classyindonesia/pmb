<?php

Route::get('backend/weblink', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@index',
	'as'			=> 'admin_weblink.index'
	]);





/* kelola backend/weblink */
Route::get('backend/weblink/add', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@add',
	'as'			=> 'admin_weblink.add'
]);
Route::get('backend/weblink/edit/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@edit',
	'as'			=> 'admin_weblink.edit'
]);


Route::post('backend/weblink/insert', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@insert',
	'as'			=> 'admin_weblink.insert'
]);

Route::post('backend/weblink/del', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@del',
	'as'			=> 'admin_weblink.del'
]);

Route::post('backend/weblink/update', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@update',
	'as'			=> 'admin_weblink.update'
]);






/* kelola kategori backend/weblink */

 Route::get('backend/weblink/kategori', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@kategori',
	'as'			=> 'admin_weblink.kategori'
	]);

  Route::get('backend/weblink/add_kategori', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@add_kategori',
	'as'			=> 'admin_weblink.add_kategori'
	]);

Route::get('backend/weblink/edit_kategori/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@edit_kategori',
	'as'			=> 'admin_weblink.edit_kategori'
]);

Route::post('backend/weblink/insert_kategori', [
'middleware'	=> 'hanya_web',
'uses'			=> 'Backend\Web\WeblinkController@insert_kategori',
'as'			=> 'admin_weblink.insert_kategori'
]);


Route::post('backend/weblink/del_kategori', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@del_kategori',
	'as'			=> 'admin_weblink.del_kategori'
]);

Route::post('backend/weblink/update_kategori', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\WeblinkController@update_kategori',
	'as'			=> 'admin_weblink.update_kategori'
]);
