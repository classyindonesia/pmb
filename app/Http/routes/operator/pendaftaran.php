<?php
Route::group(['middleware' => 'hanya_operator'], function () {

    Route::get('pendaftaran_camaba', [
        'uses'    => 'Backend\PendaftaranController@pendaftaran_camaba',
        'as'    => 'admin_pendaftaran.pendaftaran_camaba',
    ]);

    Route::get('pendaftaran_camaba/online', [
        'uses'    => 'Backend\PendaftaranController@pendaftaran_camaba_online',
        'as'    => 'admin_pendaftaran.pendaftaran_camaba_online',
    ]);

    Route::get('pendaftaran_camaba/offline', [
        'uses'    => 'Backend\PendaftaranController@pendaftaran_camaba_offline',
        'as'    => 'admin_pendaftaran.pendaftaran_camaba_offline',
    ]);



    Route::get('pendaftaran_camaba/kirim_sms/{id}', [
        'uses'    => 'Backend\PendaftaranController@kirim_sms',
        'as'    => 'admin_pendaftaran.kirim_sms',
    ]);

    Route::post('pendaftaran_camaba/do_kirim_sms/', [
        'uses'    => 'Backend\PendaftaranController@do_kirim_sms',
        'as'    => 'admin_pendaftaran.do_kirim_sms',
    ]);


    Route::get('pendaftaran', [
        'as'    => 'operator_pendaftaran.index',
        'uses'    => 'Backend\PendaftaranController@index',
    ]);

    Route::post('pendaftaran/store', [
        'as'    => 'operator_pendaftaran.store',
        'uses'    => 'Backend\PendaftaranController@store',
    ]);
 
    Route::get('pendaftaran/view_biodata/{id}', [
        'as'    => 'operator_pendaftaran.view_biodata',
        'uses'    => 'Backend\PendaftaranController@view_biodata',
    ]);

    Route::get('pendaftaran/view_berkas/{id}', [
        'as'    => 'operator_pendaftaran.view_berkas',
        'uses'    => 'Backend\PendaftaranController@view_berkas',
    ]);


    Route::get('pendaftaran/request_pindah_prodi/{id}', [
        'as'    => 'operator_pendaftaran.request_pindah_prodi',
        'uses'    => 'Backend\PendaftaranController@request_pindah_prodi',
    ]);

    Route::post('pendaftaran/submit_request_pindah_prodi', [
        'uses'    => 'Backend\Camaba\GantiProdiController@submit_request',
        'as'    => 'operator_pendaftaran.submit_request_pindah_prodi',
    ]);
 

});
