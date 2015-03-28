<?php namespace App\Http\Controllers\Backend\Dashboard;

use App\Models\Mst\Berita;

 

trait LevelWebTrait{



 
	public function level_web(){
		$jml_berita = Berita::count();
		return view('konten.backend.dashboard.web.index', compact('jml_berita'));
	}



}