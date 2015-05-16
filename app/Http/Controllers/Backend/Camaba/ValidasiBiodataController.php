<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ValidasiBiodataController extends Controller {

	private $base_view = 'konten.backend.camaba.validasi_biodata.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('validasi_biodata_home', true);
	}


	public function index(){
		return view($this->base_view.'index');		
	}

 

}
