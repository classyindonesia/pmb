<?php
Route::group(['middleware' => 'auth', 
              'prefix' => 'validasi_biodata_bml', 
              'namespace' => 'Backend'], 
                    function () {



    Route::get('/', [
            'uses' => 'ValidasiBiodataBmlController@index',
            'as'    => 'backend.validasi_biodata_bml.index'
            ]
        );
 
 
});
