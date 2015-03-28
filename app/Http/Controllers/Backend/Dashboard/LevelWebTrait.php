<?php namespace App\Http\Controllers\Backend\Dashboard;

use App\Models\Mst\Berita;
use App\Models\Mst\FotoSlide;
use App\Models\Mst\SlideUtama;
use App\Models\Mst\Weblink;

 

trait LevelWebTrait{



 
	public function level_web(){
		$jml_berita = Berita::count();
		$jml_weblink = Weblink::count();
		$jml_foto_slide = FotoSlide::count();
		$jml_foto_slide_utama = SlideUtama::count();
		return view('konten.backend.dashboard.web.index', 
			compact('jml_berita', 'jml_weblink', 'jml_foto_slide', 'jml_foto_slide_utama'));
	}



}