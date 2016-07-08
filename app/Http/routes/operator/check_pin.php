<?php
Route::group(['middleware' => 'hanya_operator'], function () {

    Route::get('check_pin', [
        'uses'    => 'Backend\CheckPinController@index',
        'as'    => 'check_pin.index',
    ]);
 
 
});
