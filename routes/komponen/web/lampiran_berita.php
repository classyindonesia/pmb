<?php

Route::get('lampiran_berita', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\LampiranBeritaController@index',
    'as'            => 'lampiran_berita.index'
    ]);

Route::get('lampiran_berita/upload_file', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\LampiranBeritaController@upload_file',
    'as'            => 'lampiran_berita.upload_file'
    ]);

Route::post('lampiran_berita/do_upload_file', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\LampiranBeritaController@do_upload_file',
    'as'            => 'lampiran_berita.do_upload_file'
    ]);

Route::get('lampiran_berita/view_detil/{id}', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\LampiranBeritaController@view_detil',
    'as'            => 'lampiran_berita.view_detil'
    ]);

Route::post('lampiran_berita/del', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\LampiranBeritaController@del',
    'as'            => 'lampiran_berita.del'
    ]);

Route::get('lampiran_berita/download/{id}', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\LampiranBeritaController@download',
    'as'            => 'lampiran_berita.download'
    ]);
