<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;
 
class PertanyaanPolling extends Eloquent {

	protected $fillable = ['pertanyaan', 'judul'];
	protected $table = 'mst_pertanyaan_polling';



	public function mst_pilihan_polling(){
	 	return $this->hasMany('\App\Models\Mst\PilihanPolling', 'mst_pertanyaan_polling_id');
	}


}