<?php
Route::group(['middleware' => 'hanya_admin'], function () {

    Route::get('log', [
        'uses'    => 'Backend\Admin\LogController@index',
        'as'    => 'admin_log.index',
    ]);
 

});
