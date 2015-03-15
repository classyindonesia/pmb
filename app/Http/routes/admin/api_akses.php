<?php

get('backend/api_akses', [
	'as'			=> 'admin_api_akses.index',
	'uses'			=> 'Backend\ApiAksesController@index',
	'middleware'	=> 'hanya_admin'

]);

get('backend/api_akses/create', [
	'as'			=> 'admin_api_akses.create',
	'uses'			=> 'Backend\ApiAksesController@create',
	'middleware'	=> 'hanya_admin'

]);

 post('backend/api_akses/regenerate_key', [
	'as'			=> 'admin_api_akses.regenerate_key',
	'uses'			=> 'Backend\ApiAksesController@regenerate_key',
	'middleware'	=> 'hanya_admin'

]);

 post('backend/api_akses/change_status', [
	'as'			=> 'admin_api_akses.change_status',
	'uses'			=> 'Backend\ApiAksesController@change_status',
	'middleware'	=> 'hanya_admin'

]);

post('backend/api_akses/store', [
	'as'			=> 'admin_api_akses.store',
	'uses'			=> 'Backend\ApiAksesController@store',
	'middleware'	=> 'hanya_admin'

]);

post('backend/api_akses/del', [
	'as'			=> 'admin_api_akses.del',
	'uses'			=> 'Backend\ApiAksesController@del',
	'middleware'	=> 'hanya_admin'

]);