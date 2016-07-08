<?php
Route::group(['middleware' => 'hanya_web'], function () {

    Route::get('foto_slide_utama', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@index',
        'as'    => 'foto_slide_utama.index',
    ]);
 
    Route::get('foto_slide_utama/upload_foto', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@upload_foto',
        'as'    => 'foto_slide_utama.upload_foto',
    ]);

    Route::post('foto_slide_utama/do_upload_gambar', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@do_upload_gambar',
        'as'    => 'foto_slide_utama.do_upload_gambar',
    ]);

    Route::post('foto_slide_utama/del', [
        'uses'    => 'Backend\Web\FotoSlideUtamaController@del',
        'as'    => 'foto_slide_utama.del',
    ]);

});
