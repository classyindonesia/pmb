<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TesTulisController extends Controller {

	private $base_view = 'konten.backend.baa.tes_tulis.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('tes_tulis_home', true);
	}

	public function index(){
		
		return view($this->base_view.'index');
	}

}
