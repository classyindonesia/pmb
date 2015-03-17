<?php

get('backend/pendaftaran', [
	'as'	=> 'operator_pendaftaran.index',
	'uses'	=> 'Backend\PendaftaranController@index',
	'middleware'	=> 'hanya_operator'
]);

post('backend/pendaftaran/store', [
	'as'	=> 'operator_pendaftaran.store',
	'uses'	=> 'Backend\PendaftaranController@store',
	'middleware'	=> 'hanya_operator'
]);