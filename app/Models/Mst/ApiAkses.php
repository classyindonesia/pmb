<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;


class ApiAkses extends Eloquent{
	protected $table = 'mst_api_akses';
	protected $fillable = ['mst_user_id', 'api_key', 'status'];


	public function mst_user(){
		return $this->belongsTo('\App\Models\Mst\User', 'mst_user_id');
	}

}