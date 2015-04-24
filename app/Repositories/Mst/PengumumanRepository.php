<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Pengumuman;
 
 
class PengumumanRepository{

	public function getAll(){
		$png = Pengumuman::with('mst_pendaftaran', 'ref_prodi')->paginate(10);
		return $png;
	}

	public function getByNoPendaftaran($no_pendaftaran){
		$p = Pendaftaran::whereNoPendaftaran($no_pendaftaran)->first();
		$pp = Pengumuman::whereMstPendaftaranId($p->id)->first();
		return $pp;
	}

}