<?php

Route::group(['middleware' => 'hanya_camaba'], function () {

    Route::get('ganti_prodi/index', [
        'uses'    => 'Backend\Camaba\GantiProdiController@index',
        'as'    => 'ganti_prodi.index',
    ]);

    Route::post('ganti_prodi/submit_request', [
        'uses'    => 'Backend\Camaba\GantiProdiController@submit_request',
        'as'    => 'ganti_prodi.submit_request',
    ]);

});
