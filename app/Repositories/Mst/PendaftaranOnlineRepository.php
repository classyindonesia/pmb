<?php namespace App\Repositories\Mst;

use App\Models\Mst\PendaftaranOnline;

class PendaftaranOnlineRepository{


 	public function getByEmail($email){
 		$p = PendaftaranOnline::where('alamat_email', '=', $email)->first();
 		return $p;
 	}


}