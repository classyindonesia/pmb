<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller{

	public function __construct(){
		view()->share('dashboard_home', true);
	}


	public function index(){
		return view('konten.backend.dashboard.index');
	}



}