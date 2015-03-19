<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class PendaftaranOnline extends Model {

	protected $table = 'mst_pendaftaran_online';
	protected $fillable = [
		'pin',
 		'nama', 
		'tempat_lahir', 
		'tgl_lahir',
		'alamat',
		'jenis_kelamin',
		'no_hp',
		'thn_lulus',
		'no_ijazah',
		'ref_sma_id',
		'ref_prodi_id1',
		'ref_prodi_id2',
		'ref_gelombang_id',
		'status'
 		];	

}
