<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller{

	public function __construct(){
		view()->share('dashboard_home', true);
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
		}
	}



}