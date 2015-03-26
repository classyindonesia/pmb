<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Pin extends Eloquent{
	protected $table = 'mst_pin';
	protected $fillable = ['pin', 'status', 'tgl_pakai'];


	public function mst_pengguna_pin(){
		return $this->hasOne('\App\Models\Mst\PenggunaPin', 'mst_pin_id');
	}


 


	 //memeriksa apakah kode sudah ada di db
 	private static function check_key($key){
 		$check = self::where('pin', '=', $key)
 			->first();
 		if(count($check)>0){
 			return 1;
 		}else{
 			return 0;
 		}
 	}


 	private static function generate_key($length=NULL){
		$key = '';
		list($usec, $sec) = explode(' ', microtime());
		mt_srand((float) $sec + ((float) $usec * 100000));
	   	$inputs = array_merge(range(2,9),range('A','H'), range('J', 'K'), range('M', 'N'), range('Q', 'Z'));
	   	for($i=0; $i<$length; $i++){
	   		$get = $inputs[array_rand($inputs)];
	   	    $key .= $get; 

		}
		return $key; 		
 	}

	public static function keygen($length=NULL){
 		if($length == NULL){
 			$length = 6;
 		}
		$key = self::generate_key($length);
		$check = self::check_key($key);
		if($check == 1){ //jika sudah ada, maka generate ulang
			$key = $this->generate_key();
		}
 		return $key;
	}




}