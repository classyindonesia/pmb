<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model {

	protected $table = 'mst_pengumuman';
	protected $fillable = ['mst_pendaftaran_id', 'ref_prodi_id', 'ref_status_daftar_ulang_id'];


	public function mst_pendaftaran(){
		return $this->belongsTo('\App\Models\Mst\Pendaftaran', 'mst_pendaftaran_id');
	}


	public function ref_prodi(){
		return $this->belongsTo('\App\Models\Ref\Prodi', 'ref_prodi_id');
	}

	public function ref_status_daftar_ulang(){
		return $this->belongsTo('\App\Models\Ref\StatusDaftarUlang', 'ref_status_daftar_ulang_id');
	}


}
