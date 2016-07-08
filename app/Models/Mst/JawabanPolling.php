<?php 

namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;
 
class JawabanPolling extends Eloquent {

	protected $fillable = ['mst_pertanyaan_polling_id', 'mst_pilihan_polling_id', 
							'mst_user_id'
	];
	protected $table = 'mst_jawaban_polling';

 

}