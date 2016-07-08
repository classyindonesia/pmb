<?php
Route::group(['middleware' => 'hanya_baa'], function () {

    Route::get('tes_tulis', [
        'uses'    => 'Backend\Baa\TesTulisController@index',
        'as'    => 'baa_tes_tulis.index',
    ]);



    Route::get('tes_tulis/create', [
        'uses'    => 'Backend\Baa\TesTulisController@create',
        'as'    => 'baa_tes_tulis.create',
    ]);


    Route::post('tes_tulis/insert', [
        'uses'    => 'Backend\Baa\TesTulisController@insert',
        'as'    => 'baa_tes_tulis.insert',
    ]);

    Route::post('tes_tulis/delete', [
        'uses'    => 'Backend\Baa\TesTulisController@delete',
        'as'    => 'baa_tes_tulis.delete',
    ]);


    Route::get('tes_tulis/edit/{id}', [
        'uses'    => 'Backend\Baa\TesTulisController@edit',
        'as'    => 'baa_tes_tulis.edit',
    ]);

    Route::post('tes_tulis/update', [
        'uses'    => 'Backend\Baa\TesTulisController@update',
        'as'    => 'baa_tes_tulis.update',
    ]);

    Route::get('tes_tulis/import', [
        'uses'    => 'Backend\Baa\TesTulisController@import',
        'as'    => 'baa_tes_tulis.import',
    ]);

    Route::post('tes_tulis/do_import', [
        'uses'    => 'Backend\Baa\TesTulisController@do_import',
        'as'    => 'baa_tes_tulis.do_import',
    ]);

    Route::get('tes_tulis/export_pdf', [
        'uses'    => 'Backend\Baa\TesTulisController@export_pdf',
        'as'    => 'baa_tes_tulis.export_pdf',
    ]);


});
