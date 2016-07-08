<?php 

namespace App\Models\Mst;

use App\Models\Mst\User;
use Illuminate\Database\Eloquent\Model as Eloquent;
 
class Log extends Eloquent {

	protected $fillable = ['mst_user_id', 'log'];
	protected $table = 'mst_log';



	public function mst_user(){
		return $this->belongsTo(User::class, 'mst_user_id');
	}


	public static function create_log($user_id, $pesan){
		$data = [
			'mst_user_id'	=> $user_id, 
			'log'			=> $pesan
		];
		$this->create($data);
	}



}