<?php 

namespace App\Models\Mst;

use App\Models\Mst\User;
use Illuminate\Database\Eloquent\Model as Eloquent;


class ApiCall extends Eloquent{
	protected $table = 'mst_api_call';
	protected $fillable = ['mst_user_id', 'ip', 'result', 'nama'];


	public function mst_user(){
		return $this->belongsTo(User::class, 'mst_user_id');
	}

}