<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;

class SlideUtama extends Eloquent{

	protected $table = 'mst_slide_utama';
	protected $fillable = ['nama_file_asli', 'mst_user_id'];

	public function mst_user(){
		return $this->belongsTo('\App\Models\Mst\User', 'mst_user_id');
	}


	

}