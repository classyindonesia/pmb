<?php namespace App\Http\Controllers\Backend\ApiV1;

use Illuminate\Http\Request;


use App\Helpers\ApiAuth;
use App\Models\Mst\Pin;


trait getRandomPin{

private $nama_api = 'v1/get_random_pin/{api_key}';


	public function get_random_pin($api_key, ApiAuth $api_auth, Pin $pin, Request $request){
		$check_api_key = $api_auth->check_api_key($api_key);
		if(count($check_api_key)>0){//check apakah api key cocok 
			$pin = Pin::where('status', '=', 0)->orderBy(\DB::raw('RAND()'))->first();
			//check apakah pin masih tersedia
			if(count($pin)>0){ //jika masih ada
				$data_response = [
					'response_code' => 200,
					'pin'	=> $pin->pin,
				];
				$insert = $api_auth->create_api_call($request->ip(), response()->json($data_response, 200), $this->nama_api, $check_api_key->mst_user_id);
				return  response()->json($data_response, 200);				
			}else{//jika sudah habis
				$data_response_out_of_pin = response()->json(['response_code' => '422', 'pesan' => 'nomor pin pendaftaran tidak tersedia!'], 422);
				$insert = $api_auth->create_api_call($request->ip(), $data_response_out_of_pin, $this->nama_api, $check_api_key->mst_user_id);
				return  $data_response_out_of_pin;
			}
		}else{
			//jika tdk cocok
			$data_response_wrong = $api_auth->response_wrong_key();
			$insert = $api_auth->create_api_call($request->ip(), $data_response_wrong, $this->nama_api, 0);
			return $data_response_wrong;
		}
	}


}