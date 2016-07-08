<?php 

namespace App\Models\Mst;

use App\Models\Mst\User;
use Illuminate\Database\Eloquent\Model as Eloquent;


class ApiAkses extends Eloquent{

	protected $table = 'mst_api_akses';
	protected $fillable = ['mst_user_id', 'api_key', 'status'];


	public function mst_user(){
		return $this->belongsTo(User::class, 'mst_user_id');
	}

}