<?php namespace App\Helpers;

 use App\Models\Mst\ApiAkses;
 use App\Models\Mst\ApiCall;
class ApiAuth{

 


	public function check_api_key($api_key){
		$check_api = ApiAkses::where('api_key', '=', $api_key)
			->whereStatus(1)
			->first();
		return $check_api;
	}


	public function response_wrong_key(){
		$data =  ['response_code' => 401, 'pesan' => 'error, Unauthorized! API Key tidak valid!']; 
		return response()->json($data, 401);
	}


	public function create_api_call($ip, $result, $nama, $mst_user_id){
		$ac = new ApiCall;
		$ac->ip = $ip;
		$ac->result = $result;
		$ac->mst_user_id = $mst_user_id;
		$ac->nama = $nama;
		$ac->save();

		return $ac;
	}


	






 


}