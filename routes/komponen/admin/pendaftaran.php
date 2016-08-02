<?php
Route::group(['middleware' => 'hanya_admin', 'namespace' => 'Backend\Admin', 'prefix' => 'data_pendaftaran'], function () {

    Route::get('/', [
        'uses'    => 'PendaftaranController@pendaftaran_camaba',
        'as'    => 'admin_data_pendaftaran.pendaftaran_camaba',
    ]);

    Route::get('online', [
        'uses'    => 'PendaftaranController@pendaftaran_camaba_online',
        'as'    => 'admin_data_pendaftaran.pendaftaran_camaba_online',
    ]);

    Route::get('offline', [
        'uses'    => 'PendaftaranController@pendaftaran_camaba_offline',
        'as'    => 'admin_data_pendaftaran.pendaftaran_camaba_offline',
    ]);



    Route::get('kirim_sms/{id}', [
        'uses'    => 'PendaftaranController@kirim_sms',
        'as'    => 'admin_data_pendaftaran.kirim_sms',
    ]);

    Route::post('do_kirim_sms/', [
        'uses'    => 'PendaftaranController@do_kirim_sms',
        'as'    => 'admin_data_pendaftaran.do_kirim_sms',
    ]);

 
 
    Route::get('view_biodata/{id}', [
        'uses'    => 'PendaftaranController@view_biodata',
        'as'    => 'admin_data_pendaftaran.view_biodata',
    ]);

    Route::get('view_berkas/{id}', [
        'uses'    => 'PendaftaranController@view_berkas',
        'as'    => 'admin_data_pendaftaran.view_berkas',
    ]);

 
    Route::get('export_data', [
        'uses'    => 'PendaftaranController@export_data',
        'as'    => 'admin_data_pendaftaran.export_data',
    ]);
 
    Route::post('delete', [
        'uses'    => 'PendaftaranController@delete',
        'as'    => 'admin_data_pendaftaran.delete',
    ]);

    Route::get('import_data_pendaftaran', [
        'uses'    => 'PendaftaranController@import_data_pendaftaran',
        'as'    => 'admin_data_pendaftaran.import_data_pendaftaran',
    ]);

    Route::post('do_import_data_pendaftaran', [
        'uses'    => 'PendaftaranController@do_import_data_pendaftaran',
        'as'    => 'admin_data_pendaftaran.do_import_data_pendaftaran',
    ]);
  

});
