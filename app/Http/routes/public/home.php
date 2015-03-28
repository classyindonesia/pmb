<?php

get('/', [
	'as' => 'home.index', 
	'uses' => 'Frontend\HomeController@index'
]);

get('daftar_berita', [
	'as' => 'daftar_berita.index', 
	'uses' => 'Frontend\BeritaController@index'
]);


get('daftar_berita/post/{slug}', [
	'as' => 'daftar_berita.post', 
	'uses' => 'Frontend\BeritaController@post'
]);

get('berita/download_lampiran/{encrypted_id}', [
	'uses'			=> 'Frontend\BeritaController@download_lampiran',
	'as'			=> 'berita.download_lampiran'
]);