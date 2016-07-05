<?php
Route::get('daftar_list_berita', [
	'as' => 'daftar_berita.index', 
	'uses' => 'Frontend\BeritaController@index'
]);

Route::get('/{slug}', [
	'as' => 'daftar_berita.post', 
	'uses' => 'Frontend\BeritaController@post'
]);


Route::get('/', [
	'as' => 'home.index', 
	'uses' => 'Frontend\HomeController@index'
]);


Route::get('berita/download_lampiran/{encrypted_id}', [
	'uses'			=> 'Frontend\BeritaController@download_lampiran',
	'as'			=> 'berita.download_lampiran'
]);