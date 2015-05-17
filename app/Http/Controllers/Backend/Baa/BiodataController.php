<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BiodataController extends Controller {

		
	private $base_view = 'konten.backend.baa.biodata.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('biodata_home', true);
	}

	public function index(){
		$biodata_nav_home = true;
		return view($this->base_view.'index', compact('biodata_nav_home'));
	}




}
