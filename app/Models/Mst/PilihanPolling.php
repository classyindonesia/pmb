<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;
 
class PilihanPolling extends Eloquent {

	protected $fillable = ['mst_pertanyaan_polling_id', 'pilihan'];
	protected $table = 'mst_pilihan_polling';

 

}