<?php namespace App\Http\Controllers\Backend\ApiV1;

use App\Helpers\ApiAuth;
use App\Models\Mst\Pin;

trait getRandomPin{



	public function get_random_pin($api_key, ApiAuth $api_auth, Pin $pin){
		$check_api_key = $api_auth->check_api_key($api_key);
		if(count($check_api_key)>0){
			$pin = Pin::where('status', '=', 0)->orderBy(\DB::raw('RAND()'))->first();
			$data_response = [
				'response_code' => 200,
				'pin'	=> $pin->pin,
			];
			return  response()->json($data_response, 200);
		}else{
			return $api_auth->response_wrong_api();
		}
	}


}