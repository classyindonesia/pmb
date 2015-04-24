<?php namespace App\Repositories\Ref;


use App\Models\Ref\Prodi as Prd;
class Prodi{


	public function getAll(){
		return Prd::with('mst_pendaftaran1')->get();
	}

	public function getByKodeProdi($kode_prodi){
		$prodi = Prd::whereKodeProdi($kode_prodi)->first();
		return $prodi;

	}


}


 