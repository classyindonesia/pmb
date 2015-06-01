<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;
 
class PertanyaanPolling extends Eloquent {

	protected $fillable = ['pertanyaan', 'judul'];
	protected $table = 'mst_pertanyaan_polling';

 

}