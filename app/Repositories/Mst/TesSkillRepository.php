<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pendaftaran;
 
class TesSkillRepository{

	public function getAll(){
 		$pendaftaran = Pendaftaran::with('mst_tes_skill')
			->orderBy('id', 'DESC')
			->has('mst_tes_skill')
			->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
			->paginate(10);
		return $pendaftaran;
	}

	public function getAllPencarian($cari){
 		$pendaftaran = Pendaftaran::with('mst_tes_skill')
			->orderBy('id', 'DESC')
			->has('mst_tes_skill')
			->where('nama', 'like', '%'.$cari.'%')
			->orWhere('no_pendaftaran', 'like', '%'.$cari.'%')
			->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
			->paginate(10);
		return $pendaftaran;
	}
 

}