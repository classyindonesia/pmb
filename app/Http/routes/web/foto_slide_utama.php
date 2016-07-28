<?php
Route::group(['middleware' => 'hanya_web', 'prefix' => 'foto_slide_utama'], function () {

    Route::get('/', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@index',
        'as'    => 'foto_slide_utama.index',
    ]);
 
    Route::get('upload_foto', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@upload_foto',
        'as'    => 'foto_slide_utama.upload_foto',
    ]);

    Route::post('do_upload_gambar', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@do_upload_gambar',
        'as'    => 'foto_slide_utama.do_upload_gambar',
    ]);

    Route::post('del', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@del',
        'as'    => 'foto_slide_utama.del',
    ]);

    Route::get('add_url/{id}', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@add_url',
        'as'    => 'foto_slide_utama.add_url',
    ]);

    Route::post('insert_url', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@insert_url',
        'as'    => 'foto_slide_utama.insert_url',
    ]);
});
