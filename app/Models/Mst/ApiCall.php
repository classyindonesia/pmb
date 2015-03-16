<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;


class ApiCall extends Eloquent{
	protected $table = 'mst_api_call';
	protected $fillable = ['mst_user_id', 'ip', 'result', 'nama'];


	public function mst_user(){
		return $this->belongsTo('\App\Models\Mst\User', 'mst_user_id');
	}

}