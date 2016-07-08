<?php
Route::get('pendaftaran_online', [

    'uses'    => 'Frontend\PendaftaranOnlineController@index',
    'as'    => 'pendaftaran_online.index',
    'middleware'    => 'guest'

]);

Route::post('pendaftaran_online/check_pin', [

    'uses'    => 'Frontend\PendaftaranOnlineController@check_pin',
    'as'    => 'pendaftaran_online.check_pin',
    'middleware'    => 'guest'

]);

Route::get('pendaftaran_online/get_form_biodata/{pin}', [
    'uses'            => 'Frontend\PendaftaranOnlineController@get_form_biodata',
    'as'            => 'pendaftaran_online.get_form_biodata',
    'middleware'    => 'guest'
]);



Route::post('pendaftaran_online/submit_pendaftaran', [
    'uses'    => 'Frontend\PendaftaranOnlineController@submit_pendaftaran',
    'as'    => 'pendaftaran_online.submit_pendaftaran',
    'middleware'    => 'guest'
]);
