<?php namespace App\Http\Controllers\Backend\Dashboard;


use App\Models\Mst\Pin;
use App\Models\Mst\User;
use App\Repositories\Mst\PendaftaranRepository;
 

 

trait LevelBaaTrait{



 
	public function level_baa(){
 		$jml_user = User::count();
 		$jml_pin = Pin::count();
 		$p = new PendaftaranRepository;
 		$jml_pendaftar = $p->getAllPlain();
 		return view('konten.backend.dashboard.baa.index', 
 			compact('jml_user', 'jml_pin', 'jml_pendaftar'));
	}



}