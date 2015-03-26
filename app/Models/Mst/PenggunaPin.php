<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class PenggunaPin extends Model {

	protected $table = 'mst_pengguna_pin';
	protected $fillable = ['mst_pendaftaran_id', 'mst_pin_id'];


	public function mst_pendaftaran(){
		return $this->belongsTo('\App\Models\Mst\Pendaftaran', 'mst_pendaftaran_id');
	}


	public function mst_pin(){
		return $this->belongsTo('\App\Models\Pin', 'mst_pin_id');
	}


}
