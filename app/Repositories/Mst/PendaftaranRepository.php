<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pendaftaran;

class PendaftaranRepository{


 	public function getByEmail($email){
 		$p = Pendaftaran::where('alamat_email', '=', $email)->first();
 		return $p;
 	}


}