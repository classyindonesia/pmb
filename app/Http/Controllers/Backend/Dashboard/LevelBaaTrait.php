<?php namespace App\Http\Controllers\Backend\Dashboard;


use App\Models\Mst\Pengumuman;
use App\Models\Mst\TesSkill;
use App\Models\Mst\TesTulis;
use App\Repositories\Mst\PendaftaranRepository;
 
 

trait LevelBaaTrait{



 
	public function level_baa(){
		$p = new PendaftaranRepository;
		$jml_pengumuman = Pengumuman::count();
		$jml_pendaftaran = $p->getAllPlain();
		$jml_tes_tulis = TesTulis::count();
		$jml_tes_skill = TesSkill::count();
 		return view('konten.backend.dashboard.baa.index', 
 			compact('jml_pengumuman', 'jml_tes_tulis', 'jml_pendaftaran', 'jml_tes_skill'));
	}



}