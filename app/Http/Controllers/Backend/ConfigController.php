<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Ref\Gelombang;
use App\Models\Ref\ThnAjaran;
use App\Models\SetupVariable;
use Illuminate\Http\Request;


class ConfigController extends Controller {


	public function __construct(){
		view()->share('config_home', true);
	}


 
	public function index(){
		$thn_ajaran = \Fungsi::get_dropdown(ThnAjaran::all(), 'thn ajaran');
		$ref_gelombang = \Fungsi::get_dropdown(Gelombang::all(), 'Gelombang');
		return view('konten.backend.config.index', compact('thn_ajaran', 'ref_gelombang'));		
	}


	public function update(Request $request){
		$o = SetupVariable::where('variable', '=', $request->variable)->first();
		$o->value = $request->value;
		$o->save();

		return 'ok';
	}

 

}
