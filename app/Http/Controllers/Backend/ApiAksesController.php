<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateApiAkses;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/* models */
use App\Models\Mst\User;
use App\Models\Mst\ApiAkses;
use App\Models\Mst\Pin;

class ApiAksesController extends Controller {

	
	public function __construct(){
		view()->share('api_akses_home', true);
	}


	public function index(){
		$users = ApiAkses::with('mst_user')->orderBy('id', 'DESC')->paginate(10);
		return view('konten.backend.api_akses.index', compact('users'));
	}


	public function create(){
		$users_api = User::where('ref_user_level_id', '=', 5)->get();
		return view('konten.backend.api_akses.popup.create', compact('users_api'));
	}

 

	public function store(CreateApiAkses $request){

		$o = new ApiAkses;
		$o->api_key = Pin::keygen(40);
		$o->mst_user_id = $request->mst_user_id;
		$o->save();

		return 'ok';
	}


	public function del(Request $request){
			$o = ApiAkses::find($request->id);
			$o->delete();
			return 'ok';
		}


	public function regenerate_key(Request $request){
		$o = ApiAkses::findOrFail($request->id);
		$o->api_key = Pin::keygen(40);
		$o->save();
		return 'ok';
	}

	public function change_status(Request $request){
		$o = ApiAkses::findOrFail($request->id);
		if($o->status == 1){
			$o->status = 0;
		}else{
			$o->status = 1;
		}
		$o->save();
		return 'ok';		
	}




}
