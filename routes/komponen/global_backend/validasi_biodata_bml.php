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


    Route::get('export_excel', [
            'uses' => 'ValidasiBiodataBmlController@export_excel',
            'as'    => 'backend.validasi_biodata_bml.export_excel'
            ]
        );
 
 
});
