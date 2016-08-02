<?php
Route::get('daftar_file', [
    'uses'            => 'Frontend\FileController@index',
    'as'            => 'daftar_file.index'
]);
