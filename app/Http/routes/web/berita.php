<?php

Route::get('berita', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@index',
	'as'			=> 'admin_berita.index'
	]);


Route::get('berita/create', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@create',
	'as'			=> 'admin_berita.create'
	]);

Route::get('berita/edit/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@edit',
	'as'			=> 'admin_berita.edit'
	]);


Route::post('berita/insert', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@insert',
	'as'			=> 'admin_berita.insert'
	]);

Route::post('berita/update', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@update',
	'as'			=> 'admin_berita.update'
	]);

Route::post('berita/del', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@del',
	'as'			=> 'admin_berita.del'
	]);

Route::post('berita/submit_search', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@submit_search',
	'as'			=> 'admin_berita.submit_search'
	]);


Route::get('berita/add_lampiran/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@add_lampiran',
	'as'			=> 'admin_berita.add_lampiran'
	]);

 Route::post('berita/insert_lampiran', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@insert_lampiran',
	'as'			=> 'admin_berita.insert_lampiran'
	]);

 Route::post('berita/del_lampiran', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@del_lampiran',
	'as'			=> 'admin_berita.del_lampiran'
	]);



Route::get('berita/add_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@add_gambar',
	'as'			=> 'admin_berita.add_gambar'
	]);

Route::get('berita/upload_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@upload_gambar',
	'as'			=> 'admin_berita.upload_gambar'
	]);

Route::post('berita/do_upload_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@do_upload_gambar',
	'as'			=> 'admin_berita.do_upload_gambar'
	]);

Route::post('berita/del_gambar', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@del_gambar',
	'as'			=> 'admin_berita.del_gambar'
	]);



Route::get('berita/add_vidio', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@add_vidio',
	'as'			=> 'admin_berita.add_vidio'
	]);
Route::get('berita/upload_vidio', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@upload_vidio',
	'as'			=> 'admin_berita.upload_vidio'
	]);
Route::post('berita/do_upload_vidio', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\BeritaController@do_upload_vidio',
	'as'			=> 'admin_berita.do_upload_vidio'
	]);
