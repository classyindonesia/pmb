<?php

Route::group(['middleware' => ['hanya_camaba', 'validasi_biodata_camaba']], function () {

    Route::get('validasi_biodata', [
        'uses'    => 'Backend\Camaba\ValidasiBiodataController@index',
        'as'    => 'backend_validasi_biodata.index',
    ]);

 
    Route::get('validasi_biodata/get_prodi_pt/{ref_perguruan_tinggi_id}/{mst_pendaftaran_id}', [
        'uses'    => 'Backend\Baa\BiodataController@get_prodi_pt',
        'as'    => 'backend_validasi_biodata.get_prodi_pt',
    ]);

 
    Route::post('validasi_biodata/update', [
        'uses'    => 'Backend\Camaba\ValidasiBiodataController@update',
        'as'    => 'backend_validasi_biodata.update',
    ]);

    Route::get('validasi_biodata/validasi', [
        'uses'    => 'Backend\Camaba\ValidasiBiodataController@validasi',
        'as'    => 'backend_validasi_biodata.validasi',
    ]);

    Route::post('validasi_biodata/do_validasi', [
        'uses'    => 'Backend\Camaba\ValidasiBiodataController@do_validasi',
        'as'    => 'backend_validasi_biodata.do_validasi',
    ]);


    Route::get('validasi_biodata/cetak', [
        'uses'    => 'Backend\Camaba\ValidasiBiodataController@cetak',
        'as'    => 'backend_validasi_biodata.cetak',
    ]);


});
