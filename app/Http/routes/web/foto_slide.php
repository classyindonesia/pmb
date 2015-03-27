<?php

Route::get('backend/foto_slide', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@index',
	'as'			=> 'foto_slide.index'
	]);


Route::post('backend/foto_slide/del', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@del',
	'as'			=> 'foto_slide.del'
	]);


Route::get('backend/foto_slide/upload', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@upload',
	'as'			=> 'foto_slide.upload'
	]);

Route::post('backend/foto_slide/do_upload', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@do_upload',
	'as'			=> 'foto_slide.do_upload'
	]);

Route::get('backend/foto_slide/edit/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@edit',
	'as'			=> 'foto_slide.edit'
	]);


Route::post('backend/foto_slide/update', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@update',
	'as'			=> 'foto_slide.update'
	]);

Route::post('backend/foto_slide/do_update_foto', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@do_update_foto',
	'as'			=> 'foto_slide.do_update_foto'
	]);





/* kelola jabatan */
Route::get('backend/foto_slide/jabatan', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@jabatan',
	'as'			=> 'foto_slide.jabatan'
	]);

Route::get('backend/foto_slide/add_jabatan', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@add_jabatan',
	'as'			=> 'foto_slide.add_jabatan'
	]);

Route::post('backend/foto_slide/insert_jabatan', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@insert_jabatan',
	'as'			=> 'foto_slide.insert_jabatan'
	]);

Route::post('backend/foto_slide/update_jabatan', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@update_jabatan',
	'as'			=> 'foto_slide.update_jabatan'
	]);

Route::post('backend/foto_slide/del_jabatan', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@del_jabatan',
	'as'			=> 'foto_slide.del_jabatan'
	]);

Route::get('backend/foto_slide/edit_jabatan/{id}', [
	'middleware'	=> 'hanya_web',
	'uses'			=> 'Backend\Web\FotoSlideController@edit_jabatan',
	'as'			=> 'foto_slide.edit_jabatan'
	]);
