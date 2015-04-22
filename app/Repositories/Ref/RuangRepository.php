<?php namespace App\Repositories\Ref;


use App\Models\Ref\Ruang;

class RuangRepository{


	public function getAll(){
		return Ruang::all();
	}

	public function getByKodeRuang($kode_ruang){
		$r = Ruang::where('kode_ruang', '=', $kode_ruang)->first();
		return $r;
	}


}


 