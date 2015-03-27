<?php

Route::get('backend/berita', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@index',
	'as'			=> 'admin_berita.index'
	]);


Route::get('backend/berita/create', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@create',
	'as'			=> 'admin_berita.create'
	]);

Route::get('backend/berita/edit/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@edit',
	'as'			=> 'admin_berita.edit'
	]);


Route::post('backend/berita/insert', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@insert',
	'as'			=> 'admin_berita.insert'
	]);

Route::post('backend/berita/update', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@update',
	'as'			=> 'admin_berita.update'
	]);

Route::post('backend/berita/del', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@del',
	'as'			=> 'admin_berita.del'
	]);

Route::post('backend/berita/submit_search', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@submit_search',
	'as'			=> 'admin_berita.submit_search'
	]);


Route::get('backend/berita/add_lampiran/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@add_lampiran',
	'as'			=> 'admin_berita.add_lampiran'
	]);

 Route::post('backend/berita/insert_lampiran', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@insert_lampiran',
	'as'			=> 'admin_berita.insert_lampiran'
	]);

 Route::post('backend/berita/del_lampiran', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@del_lampiran',
	'as'			=> 'admin_berita.del_lampiran'
	]);



Route::get('backend/berita/add_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@add_gambar',
	'as'			=> 'admin_berita.add_gambar'
	]);

Route::get('backend/berita/upload_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@upload_gambar',
	'as'			=> 'admin_berita.upload_gambar'
	]);

Route::post('backend/berita/do_upload_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@do_upload_gambar',
	'as'			=> 'admin_berita.do_upload_gambar'
	]);

Route::post('backend/berita/del_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@del_gambar',
	'as'			=> 'admin_berita.del_gambar'
	]);



Route::get('backend/berita/add_vidio', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@add_vidio',
	'as'			=> 'admin_berita.add_vidio'
	]);
Route::get('backend/berita/upload_vidio', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@upload_vidio',
	'as'			=> 'admin_berita.upload_vidio'
	]);
post('backend/berita/do_upload_vidio', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@do_upload_vidio',
	'as'			=> 'admin_berita.do_upload_vidio'
	]);
