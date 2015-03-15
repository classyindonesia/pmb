<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\SetupVariable;


class ConfigController extends Controller {


	public function __construct(){
		view()->share('config_home', true);
	}


 
	public function index(){
		return view('konten.backend.config.index');		
	}


	public function update(Request $request){
		$o = SetupVariable::where('variable', '=', $request->variable)->first();
		$o->value = $request->value;
		$o->save();

		return 'ok';
	}

 

}
