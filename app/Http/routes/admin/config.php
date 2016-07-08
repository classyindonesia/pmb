<?php

Route::get('config', [
        'middleware' => 'hanya_admin',
        'as'        => 'admin_config.index',
        'uses' => 'Backend\ConfigController@index'
        ]
    );

Route::post('config/update', [
        'middleware' => 'hanya_admin',
        'as'        => 'admin_config.update',
        'uses' => 'Backend\ConfigController@update'
        ]
    );
