<?php

Route::group(['namespace' => 'Backend', 'middleware' => 'hanya_web'], function(){
   
    Route::get('galery', [
        'uses'              => 'GaleryController@index',
        'as'                => 'backend.galery.index'
    ]);

    Route::get('galery/add_album', [
        'uses'              => 'GaleryController@add_album',
        'as'                => 'backend.galery.add_album'
    ]);

    Route::get('galery/edit_album/{id}', [
        'uses'              => 'GaleryController@edit_album',
        'as'                => 'backend.galery.edit_album'
    ]);    

    Route::post('galery/insert_album', [
        'uses'              => 'GaleryController@insert_album',
        'as'                => 'backend.galery.insert_album'
    ]);

    Route::post('galery/update_album', [
        'uses'              => 'GaleryController@update_album',
        'as'                => 'backend.galery.update_album'
    ]);

    Route::post('galery/del_album', [
        'uses'              => 'GaleryController@del_album',
        'as'                => 'backend.galery.del_album'
    ]);   




    Route::get('galery/upload_gambar/{id}', [
        'uses'              => 'GaleryController@upload_gambar',
        'as'                => 'backend.galery.upload_gambar'
    ]);

    Route::post('galery/do_upload_gambar', [
        'uses'              => 'GaleryController@do_upload_gambar',
        'as'                => 'backend.galery.do_upload_gambar'
    ]);



});

