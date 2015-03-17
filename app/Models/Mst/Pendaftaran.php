<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Pendaftaran extends Eloquent{
	protected $table = 'mst_pendaftaran';
	protected $fillable = [
		'no_pendaftaran', 
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
		'jenis_daftar'
		];


	public function mst_user(){
		return $this->belongsTo('\App\Models\Mst\User', 'mst_user_id');
	}


	public function createNoPendaftaran(){
		
	}


	

}