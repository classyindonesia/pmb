<?php
Route::group(['middleware' => 'hanya_baa'], function(){

	get('backend/tes_skill', [
		'uses'	=> 'Backend\Baa\TesSkillController@index',
		'as'	=> 'baa_tes_skill.index',
	]);



	get('backend/tes_skill/create', [
		'uses'	=> 'Backend\Baa\TesSkillController@create',
		'as'	=> 'baa_tes_skill.create',
	]);


	post('backend/tes_skill/insert', [
		'uses'	=> 'Backend\Baa\TesSkillController@insert',
		'as'	=> 'baa_tes_skill.insert',
	]);

	post('backend/tes_skill/delete', [
		'uses'	=> 'Backend\Baa\TesSkillController@delete',
		'as'	=> 'baa_tes_skill.delete',
	]);


	get('backend/tes_skill/edit/{id}', [
		'uses'	=> 'Backend\Baa\TesSkillController@edit',
		'as'	=> 'baa_tes_skill.edit',
	]);

	post('backend/tes_skill/update', [
		'uses'	=> 'Backend\Baa\TesSkillController@update',
		'as'	=> 'baa_tes_skill.update',
	]);	

	get('backend/tes_skill/import', [
		'uses'	=> 'Backend\Baa\TesSkillController@import',
		'as'	=> 'baa_tes_skill.import',
	]);

	post('backend/tes_skill/do_import', [
		'uses'	=> 'Backend\Baa\TesSkillController@do_import',
		'as'	=> 'baa_tes_skill.do_import',
	]);


	get('backend/tes_skill/export_pdf', [
		'uses'	=> 'Backend\Baa\TesSkillController@export_pdf',
		'as'	=> 'baa_tes_skill.export_pdf',
	]);

});


