<?php
Route::group(['middleware' => 'hanya_baa'], function () {

    Route::get('tes_skill', [
        'uses'    => 'Backend\Baa\TesSkillController@index',
        'as'    => 'baa_tes_skill.index',
    ]);



    Route::get('tes_skill/create', [
        'uses'    => 'Backend\Baa\TesSkillController@create',
        'as'    => 'baa_tes_skill.create',
    ]);

    Route::get('tes_skill/list_skill/{mst_pendaftaran_id}', [
        'uses'    => 'Backend\Baa\TesSkillController@list_skill',
        'as'    => 'baa_tes_skill.list_skill',
    ]);

    Route::post('tes_skill/insert', [
        'uses'    => 'Backend\Baa\TesSkillController@insert',
        'as'    => 'baa_tes_skill.insert',
    ]);

    Route::post('tes_skill/delete', [
        'uses'    => 'Backend\Baa\TesSkillController@delete',
        'as'    => 'baa_tes_skill.delete',
    ]);


    Route::get('tes_skill/edit/{id}', [
        'uses'    => 'Backend\Baa\TesSkillController@edit',
        'as'    => 'baa_tes_skill.edit',
    ]);

    Route::post('tes_skill/update', [
        'uses'    => 'Backend\Baa\TesSkillController@update',
        'as'    => 'baa_tes_skill.update',
    ]);

    Route::get('tes_skill/import', [
        'uses'    => 'Backend\Baa\TesSkillController@import',
        'as'    => 'baa_tes_skill.import',
    ]);

    Route::post('tes_skill/do_import', [
        'uses'    => 'Backend\Baa\TesSkillController@do_import',
        'as'    => 'baa_tes_skill.do_import',
    ]);


    Route::get('tes_skill/export_pdf', [
        'uses'    => 'Backend\Baa\TesSkillController@export_pdf',
        'as'    => 'baa_tes_skill.export_pdf',
    ]);

});
