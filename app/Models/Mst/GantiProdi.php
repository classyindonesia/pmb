<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Ref\Prodi;
use Illuminate\Database\Eloquent\Model;

class GantiProdi extends Model {

	protected $table = 'mst_ganti_prodi';
	protected $fillable = ['mst_pendaftaran_id', 'ref_prodi_id', 
							'prodi_pilihan', 'status', 'ref_prodi_id_awal'
	];


	public function ref_prodi(){
		return $this->belongsTo(Prodi::class, 'ref_prodi_id');
	} 

	public function mst_pendaftaran(){
		return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
	}

	public function ref_prodi_awal(){
		return $this->belongsTo(Prodi::class, 'ref_prodi_id_awal');
	} 




}
