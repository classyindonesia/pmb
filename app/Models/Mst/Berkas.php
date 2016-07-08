<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Ref\JenisBerkas;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model {

	protected $table = 'mst_berkas';
	protected $fillable = ['mst_pendaftaran_id', 'nama_file_asli', 'ref_jenis_berkas_id'];


	public function mst_pendaftaran(){
		return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
	}


	public function ref_jenis_berkas(){
		return $this->belongsTo(JenisBerkas::class, 'ref_jenis_berkas_id');
	}


}
