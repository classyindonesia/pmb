<?php

Route::group(['namespace' => 'Backend', 'middleware' => 'hanya_web', 'prefix' => 'galery'], function(){
   
    Route::get('/', [
        'uses'              => 'GaleryController@index',
        'as'                => 'backend.galery.index'
    ]);

    Route::get('add_album', [
        'uses'              => 'GaleryController@add_album',
        'as'                => 'backend.galery.add_album'
    ]);

    Route::get('edit_album/{id}', [
        'uses'              => 'GaleryController@edit_album',
        'as'                => 'backend.galery.edit_album'
    ]);    

    Route::post('insert_album', [
        'uses'              => 'GaleryController@insert_album',
        'as'                => 'backend.galery.insert_album'
    ]);

    Route::post('update_album', [
        'uses'              => 'GaleryController@update_album',
        'as'                => 'backend.galery.update_album'
    ]);

    Route::post('del_album', [
        'uses'              => 'GaleryController@del_album',
        'as'                => 'backend.galery.del_album'
    ]);   




    Route::get('upload_gambar/{id}', [
        'uses'              => 'GaleryController@upload_gambar',
        'as'                => 'backend.galery.upload_gambar'
    ]);

    Route::post('do_upload_gambar', [
        'uses'              => 'GaleryController@do_upload_gambar',
        'as'                => 'backend.galery.do_upload_gambar'
    ]);



    Route::get('images/{mst_album_galery_id}', [
        'uses'              => 'GaleryController@images',
        'as'                => 'backend.galery.images'
    ]);



});

