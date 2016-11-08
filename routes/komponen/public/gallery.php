<?php 

Route::group(['namespace' => 'Frontend'], function(){

	Route::get('gallery', [
		'as'	=> 'frontend.gallery.index',
		'uses'	=> 'GalleryController@index'
	]);

	Route::get('gallery/images/{mst_album_id}', [
		'as'	=> 'frontend.gallery.images',
		'uses'	=> 'GalleryController@images'
	]);

});


 