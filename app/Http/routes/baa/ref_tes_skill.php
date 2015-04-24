<?php
Route::group(['middleware' => 'hanya_baa'], function(){

 
 	Route::resource('backend/ref_tes_skill', 'Backend\Baa\RefTesSkillController', 
		[
		'except' => 'show', 
		'names' => [
			'index' => 'ref_tes_skill.index',
			'create'	=> 'ref_tes_skill.create',
			'update'	=> 'ref_tes_skill.update',
			'store'		=> 'ref_tes_skill.store',
			'edit'		=> 'ref_tes_skill.edit',
			'destroy'	=> 'ref_tes_skill.destroy'
		]]);

});


