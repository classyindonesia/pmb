<?php
Route::group(['middleware' => 'hanya_baa'], function () {

    Route::get('baa_data_pendaftaran', [
        'uses'    => 'Backend\Baa\PendaftaranController@pendaftaran_camaba',
        'as'    => 'baa_data_pendaftaran.pendaftaran_camaba',
    ]);

    Route::get('baa_data_pendaftaran/online', [
        'uses'    => 'Backend\Baa\PendaftaranController@pendaftaran_camaba_online',
        'as'    => 'baa_data_pendaftaran.pendaftaran_camaba_online',
    ]);

    Route::get('baa_data_pendaftaran/offline', [
        'uses'    => 'Backend\Baa\PendaftaranController@pendaftaran_camaba_offline',
        'as'    => 'baa_data_pendaftaran.pendaftaran_camaba_offline',
    ]);



    Route::get('baa_data_pendaftaran/kirim_sms/{id}', [
        'uses'    => 'Backend\Baa\PendaftaranController@kirim_sms',
        'as'    => 'baa_data_pendaftaran.kirim_sms',
    ]);

    Route::post('baa_data_pendaftaran/do_kirim_sms/', [
        'uses'    => 'Backend\Baa\PendaftaranController@do_kirim_sms',
        'as'    => 'baa_data_pendaftaran.do_kirim_sms',
    ]);

 
 
    Route::get('baa_data_pendaftaran/view_biodata/{id}', [
        'uses'    => 'Backend\Baa\PendaftaranController@view_biodata',
        'as'    => 'baa_data_pendaftaran.view_biodata',
    ]);

    Route::get('baa_data_pendaftaran/view_berkas/{id}', [
        'uses'    => 'Backend\Baa\PendaftaranController@view_berkas',
        'as'    => 'baa_data_pendaftaran.view_berkas',
    ]);

 
    Route::get('baa_data_pendaftaran/export_data', [
        'uses'    => 'Backend\Baa\PendaftaranController@export_data',
        'as'    => 'baa_data_pendaftaran.export_data',
    ]);
 

    Route::get('baa_data_pendaftaran/pilih_tahun_ajaran', [
        'uses'    => 'Backend\Baa\PendaftaranController@pilih_tahun_ajaran',
        'as'    => 'baa_data_pendaftaran.pilih_tahun_ajaran',
    ]);

    Route::post('baa_data_pendaftaran/set_tahun_ajaran', [
        'uses'    => 'Backend\Baa\PendaftaranController@set_tahun_ajaran',
        'as'    => 'baa_data_pendaftaran.set_tahun_ajaran',
    ]);


});
