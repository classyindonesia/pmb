<?php
Route::group(['middleware' => 'hanya_baa'], function () {

 
    Route::resource('ref_status_daftar_ulang', 'Backend\Baa\RefStatusDaftarUlangController',
        [
        'except' => 'show',
        'names' => [
            'index' => 'backend_ref_status_daftar_ulang.index',
            'create'    => 'backend_ref_status_daftar_ulang.create',
            'update'    => 'backend_ref_status_daftar_ulang.update',
            'store'        => 'backend_ref_status_daftar_ulang.store',
            'edit'        => 'backend_ref_status_daftar_ulang.edit',
            'destroy'    => 'backend_ref_status_daftar_ulang.destroy'
        ]]);

});
