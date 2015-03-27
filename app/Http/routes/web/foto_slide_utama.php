<?php
Route::group(['middleware' => 'hanya_web'], function(){

	get('backend/foto_slide_utama', [
		'uses'	=> 'Backend\Web\FotoSlideUtamaController@index',
		'as'	=> 'foto_slide_utama.index',
	]);
 
 	get('backend/foto_slide_utama/upload_foto', [
		'uses'	=> 'Backend\Web\FotoSlideUtamaController@upload_foto',
		'as'	=> 'foto_slide_utama.upload_foto',
	]);

 	post('backend/foto_slide_utama/do_upload_gambar', [
		'uses'	=> 'Backend\Web\FotoSlideUtamaController@do_upload_gambar',
		'as'	=> 'foto_slide_utama.do_upload_gambar',
	]);



});


