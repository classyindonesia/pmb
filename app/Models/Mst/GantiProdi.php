<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class GantiProdi extends Model {

	protected $table = 'mst_ganti_prodi';
	protected $fillable = ['mst_pendaftaran_id', 'ref_prodi_id', 'prodi_pilihan', 'status'];


	



}
