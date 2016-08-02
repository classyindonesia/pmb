<?php 

Route::get('rss', [
	'as'	=> 'frontend_feed.rss',
	'uses'	=> 'Frontend\FeedController@rss'
]);

Route::get('feed', [
	'as'	=> 'frontend_feed.index',
	'uses'	=> 'Frontend\FeedController@generate'
]);