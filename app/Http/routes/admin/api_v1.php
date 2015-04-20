<?php

get('api/v1/get_random_pin/{api_key}', [
	'uses' => 'Backend\ApiV1Controller@get_random_pin',
	'as'	=> 'api_v1.get_random_pin'
]);

get('api/v1/check_status_pin/{api_key}/{id_pin}', [
	'uses' => 'Backend\ApiV1Controller@check_status_pin',
	'as'	=> 'api_v1.check_status_pin'
]);