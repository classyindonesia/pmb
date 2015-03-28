<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mst\Berita;
use App\Models\Mst\SlideUtama;

class HomeController extends Controller{

	private $base_view = 'konten.frontend.home.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('frontend_home', true);
	}



	public function index(){
		$foto_slide_utama = SlideUtama::take(10)->orderByRaw("RAND()")->get();
		$berita = Berita::orderBy('id', 'DESC')->take(10)->get();
		return view($this->base_view.'index', compact('berita', 'foto_slide_utama'));
	}


}