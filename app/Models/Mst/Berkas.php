<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model {

	protected $table = 'mst_berkas';
	protected $fillable = ['mst_pendaftaran_id', 'nama_file_asli', 'ref_jenis_berkas_id'];


	public function mst_pendaftaran(){
		return $this->belongsTo('\App\Models\Mst\Pendaftaran', 'mst_pendaftaran_id');
	}


	public function ref_jenis_berkas(){
		return $this->belongsTo('\App\Models\Ref\JenisBerkas', 'ref_jenis_berkas_id');
	}


}
