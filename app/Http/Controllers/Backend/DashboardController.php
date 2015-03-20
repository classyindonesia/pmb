<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/* repos */
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Mst\PendaftaranOnlineRepository;



/* facades */
use Auth;

class DashboardController extends Controller{

	public function __construct(){
		view()->share('dashboard_home', true);
	}



	private function level_camaba(){
	  $base_view_index = 'konten.backend.dashboard.camaba.';
			$b = new PendaftaranRepository;
			$biodata = $b->getByEmail(Auth::user()->email);
 			return view('konten.backend.dashboard.camaba.index', 
 				compact('biodata', 'jenis_daftar', 'base_view_index'));			
	}


	public function index(){
		$level = \Auth::user()->ref_user_level_id;
		if($level == 1){
			//level admin
			return view('konten.backend.dashboard.index');
		}elseif($level == 2){
			//level web
			return view('konten.backend.dashboard.index');			
		}elseif($level == 3){
			//level operator
			return view('konten.backend.dashboard.operator.index');			
		}elseif($level == 4){
			return $this->level_camaba();		

		}
	}



}