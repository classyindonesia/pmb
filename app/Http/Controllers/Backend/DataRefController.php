<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DataRefController extends Controller {

	public function __construct(){
		view()->share('data_ref_global_home', true);
	}
	
	public function index(){
		$data_ref_home = true;
		return view('konten.backend.ref.index', compact('data_ref_home'));
	}

}
