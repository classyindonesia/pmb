<?php

get('api/v1/get_random_pin/{api_key}', [
	'uses' => 'Backend\ApiV1Controller@get_random_pin',
	'as'	=> 'api_v1.get_random_pin'
]);