<?php
Route::group(['middleware' => 'hanya_baa'], function () {

 
    Route::resource('ref_penghasilan_ortu', 'Backend\Baa\RefPenghasilanOrtuController',
        [
        'except' => 'show',
        'names' => [
            'index' => 'backend_ref_penghasilan_ortu.index',
            'create'    => 'backend_ref_penghasilan_ortu.create',
            'update'    => 'backend_ref_penghasilan_ortu.update',
            'store'        => 'backend_ref_penghasilan_ortu.store',
            'edit'        => 'backend_ref_penghasilan_ortu.edit',
            'destroy'    => 'backend_ref_penghasilan_ortu.destroy'
        ]]);

});
