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
			$b = new PendaftaranRepository;
			$biodata = $b->getByEmail(Auth::user()->email);
			$jenis_daftar = 0; //offline
			if(count($biodata)<=0){
				$p_online = new PendaftaranOnlineRepository;
				$biodata = $p_online->getByEmail(Auth::user()->email);
				$jenis_daftar = 1; //online
			}
			return view('konten.backend.dashboard.camaba.index', compact('biodata', 'jenis_daftar'));			
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