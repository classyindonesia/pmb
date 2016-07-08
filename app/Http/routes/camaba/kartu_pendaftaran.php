<?php

Route::group(['middleware' => 'hanya_camaba'], function () {

    Route::get('kartu_pendaftaran', [
        'uses'    => 'Backend\Camaba\KartuPendaftaranController@index',
        'as'    => 'kartu_pendaftaran.index',
    ]);

    Route::get('kartu_pendaftaran/cetak', [
        'uses'    => 'Backend\Camaba\KartuPendaftaranController@cetak',
        'as'    => 'kartu_pendaftaran.cetak',
    ]);


});
