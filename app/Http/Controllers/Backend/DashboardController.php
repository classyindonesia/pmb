<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mst\Pendaftaran;
use App\Models\Ref\Gelombang;
use App\Repositories\Mst\PendaftaranOnlineRepository;
use App\Repositories\Mst\PendaftaranRepository;
use Auth;

class DashboardController extends Controller{

	private $base_view = 'konten.backend.dashboard.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('dashboard_home', true);
	}



	private function level_camaba(){
	  $base_view_index = 'konten.backend.dashboard.camaba.';
			$b = new PendaftaranRepository;
			$biodata = $b->getByEmail(Auth::user()->email);
 			return view('konten.backend.dashboard.camaba.index', 
 				compact('biodata', 'jenis_daftar', 'base_view_index'));			
	}




	public function level_operator(){
		$gelombang = Gelombang::where('ref_thn_ajaran_id', '=', \SV::get('ref_thn_ajaran_id'))
			->with('mst_pendaftaran')->get();
		return view('konten.backend.dashboard.operator.index', 
			compact('gelombang'));			
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
			return $this->level_operator();		
		}elseif($level == 4){
			return $this->level_camaba();		

		}
	}



}