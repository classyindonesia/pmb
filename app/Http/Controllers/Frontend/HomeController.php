<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller{


	public function __construct(){
		view()->share('frontend_home', true);
	}



	public function index(){
		return view('konten.frontend.home.index');
	}


}