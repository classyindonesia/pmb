<?php
Route::group(['middleware' => 'hanya_baa'], function () {

 
    Route::resource('ref_tinggal', 'Backend\Baa\RefTinggalController',
        [
        'except' => 'show',
        'names' => [
            'index' => 'backend_ref_tinggal.index',
            'create'    => 'backend_ref_tinggal.create',
            'update'    => 'backend_ref_tinggal.update',
            'store'        => 'backend_ref_tinggal.store',
            'edit'        => 'backend_ref_tinggal.edit',
            'destroy'    => 'backend_ref_tinggal.destroy'
        ]]);

});
