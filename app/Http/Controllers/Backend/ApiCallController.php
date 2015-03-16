<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Repositories\Mst\ApiCall;

class ApiCallController extends Controller {

	public function __construct(){
		view()->share('api_call_home', true);
	}


	public function index(ApiCall $api){
		if(\Session::has('pencarian_api')){
			$api_call = $api->search();		
		}else{
			$api_call = $api->get();
		}
		return view('konten.backend.api_call.index', compact('api_call'));
	}


	public function submit_search(Request $request){
		if($request->has('submit')){
			\Session::put('pencarian_api', $request->pencarian_api);
		}else{
			\Session::forget('pencarian_api');
		}
		return redirect()->route("admin_api_call.index");
	}


	public function detail($id, ApiCall $api){
		$data = $api->getOne($id);
		return view('konten.backend.api_call.popup.detail', compact('data'));
	}


}
