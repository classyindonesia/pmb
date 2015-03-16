<?php namespace App\Helpers;

 use App\Models\Mst\ApiAkses;
class ApiAuth{

 


	public function check_api_key($api_key){
		$check_api = ApiAkses::where('api_key', '=', $api_key)->first();
		return $check_api;
	}


	public function response_wrong_api(){
		$data =  ['response_code' => 401, 'pesan' => 'error, Unauthorized! API Key tidak valid!']; 
		return response()->json($data, 401);
	}


	






 


}