<?php namespace App\Models\Mst;

 use Illuminate\Database\Eloquent\Model;

class TesTulis extends Model {

	protected $table = 'mst_tes_tulis';
	protected $fillable = ['mst_pendaftaran_id', 'ref_ruang_id'];

	public function mst_pendaftaran(){
	 	return $this->belongsTo("\App\Models\Mst\Pendaftaran", 'mst_pendaftaran_id');
	}

	public function ref_ruang(){
	 	return $this->belongsTo('\App\Models\Ref\Ruang', 'ref_ruang_id');
	}



}
