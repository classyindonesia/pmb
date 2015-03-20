<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pendaftaran;

class PendaftaranRepository{


 	public function getByEmail($email){
 		$p = Pendaftaran::where('alamat_email', '=', $email)
 			->with('ref_sma', 'ref_prodi1', 'ref_prodi2')
 			->first();
 		return $p;
 	}


}