<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Pin;
use Illuminate\Http\Request;

class CheckPinController extends Controller {

	private $base_view = 'konten.backend.check_pin.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('check_pin_home', true);
	}

	public function index(Request $request){
		if($request->get('search')){
			$pin = Pin::with('mst_pengguna_pin')->wherePin($request->get('search'))->first();
		}
		return view($this->base_view.'index', compact('pin'));
	}

}
