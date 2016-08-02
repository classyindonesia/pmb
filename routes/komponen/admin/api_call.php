<?php

Route::get('api_call', [
    'uses'            => 'Backend\ApiCallController@index',
    'as'            => 'admin_api_call.index',
    'middleware'    => 'hanya_admin'
]);

Route::get('api_call/detail/{id}', [
    'uses'            => 'Backend\ApiCallController@detail',
    'as'            => 'admin_api_call.detail',
    'middleware'    => 'hanya_admin'
]);


Route::post('api_call/submit_search', [
    'uses'            => 'Backend\ApiCallController@submit_search',
    'as'            => 'admin_api_call.submit_search',
    'middleware'    => 'hanya_admin'
]);
