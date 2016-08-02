<?php
Route::group(['middleware' => 'hanya_baa'], function () {

    Route::get('pengumuman', [
        'uses'    => 'Backend\Baa\PengumumanController@index',
        'as'    => 'pengumuman.index',
    ]);



    Route::get('pengumuman/create', [
        'uses'    => 'Backend\Baa\PengumumanController@create',
        'as'    => 'pengumuman.create',
    ]);


    Route::post('pengumuman/insert', [
        'uses'    => 'Backend\Baa\PengumumanController@insert',
        'as'    => 'pengumuman.insert',
    ]);

    Route::post('pengumuman/delete', [
        'uses'    => 'Backend\Baa\PengumumanController@delete',
        'as'    => 'pengumuman.delete',
    ]);


    Route::get('pengumuman/edit/{id}', [
        'uses'    => 'Backend\Baa\PengumumanController@edit',
        'as'    => 'pengumuman.edit',
    ]);

    Route::post('pengumuman/update', [
        'uses'    => 'Backend\Baa\PengumumanController@update',
        'as'    => 'pengumuman.update',
    ]);

    Route::get('pengumuman/import', [
        'uses'    => 'Backend\Baa\PengumumanController@import',
        'as'    => 'pengumuman.import',
    ]);

    Route::post('pengumuman/do_import', [
        'uses'    => 'Backend\Baa\PengumumanController@do_import',
        'as'    => 'pengumuman.do_import',
    ]);


    Route::get('pengumuman/export_pdf', [
        'uses'    => 'Backend\Baa\PengumumanController@export_pdf',
        'as'    => 'pengumuman.export_pdf',
    ]);

});
