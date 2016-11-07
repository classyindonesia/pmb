<?php 

Route::group(['namespace' => 'Frontend'], function(){

	Route::get('gallery', [
		'as'	=> 'frontend.gallery.index',
		'uses'	=> 'GalleryController@index'
	]);

});


 