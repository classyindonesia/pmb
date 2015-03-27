<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mst\Berita;

class HomeController extends Controller{

	private $base_view = 'konten.frontend.home.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('frontend_home', true);
	}



	public function index(){
		$berita = Berita::orderBy('id', 'DESC')->take(10)->get();
		return view($this->base_view.'index', compact('berita'));
	}


}