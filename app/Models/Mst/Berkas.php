<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model {

	protected $table = 'mst_berkas';
	protected $fillable = ['mst_pendaftaran_id', 'nama_file_asli', 'ref_jenis_berkas_id'];


}
