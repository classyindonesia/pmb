<?php
Route::get('data_ref', [
    'uses'    => 'Backend\DataRefController@index',
    'middleware'    => 'hanya_admin',
    'as'    => 'admin_ref.index'
]);



Route::group([ 'prefix' => 'backend', 'middleware' => 'hanya_admin'], function () {

    Route::resource('ref_sma', 'Backend\RefSmaController',
        [
        'except' => 'show',
        'names' => [
            'index' => 'ref_sma.index',
            'create'    => 'ref_sma.create',
            'update'    => 'ref_sma.update',
            'store'        => 'ref_sma.store',
            'edit'        => 'ref_sma.edit',
            'destroy'    => 'ref_sma.destroy'
        ]]);

    Route::resource('ref_thn_ajaran', 'Backend\RefThnAjaranController',
        [
        'except' => 'show',
        'names' => [
            'index' => 'ref_thn_ajaran.index',
            'create'    => 'ref_thn_ajaran.create',
            'update'    => 'ref_thn_ajaran.update',
            'store'        => 'ref_thn_ajaran.store',
            'edit'        => 'ref_thn_ajaran.edit',
            'destroy'    => 'ref_thn_ajaran.destroy'
        ]]);

    Route::resource('ref_gelombang', 'Backend\RefGelombangController',
        ['except' => 'show',
        'names' => [
            'index' => 'ref_gelombang.index',
            'create'    => 'ref_gelombang.create',
            'update'    => 'ref_gelombang.update',
            'store'        => 'ref_gelombang.store',
            'edit'        => 'ref_gelombang.edit',
            'destroy'    => 'ref_gelombang.destroy'

        ]]);


    Route::resource('ref_prodi', 'Backend\RefProdiController',
        ['except' => 'show',
        'names' => [
            'index'    => 'admin_ref_prodi.index',
            'create'    => 'admin_ref_prodi.create',
            'update'    => 'admin_ref_prodi.update',
            'store'        => 'admin_ref_prodi.store',
            'edit'        => 'admin_ref_prodi.edit',
            'destroy'    => 'admin_ref_prodi.destroy'

        ]]);


});
