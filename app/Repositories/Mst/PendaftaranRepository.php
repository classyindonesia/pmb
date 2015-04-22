<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pendaftaran;
use SV;
class PendaftaranRepository{


 	public function getOneByNoPendaftaran($no_pendaftaran){
 		$p = Pendaftaran::where('no_pendaftaran', '=', $no_pendaftaran)
 			->with('ref_sma', 'ref_prodi1', 'ref_prodi2')
 			->first();
 		return $p;
 	}


 	public function getByEmail($email){
 		$p = Pendaftaran::where('alamat_email', '=', $email)
 			->with('ref_sma', 'ref_prodi1', 'ref_prodi2')
 			->first();
 		return $p;
 	}


 	public function getByJenisDaftar($jenis_daftar){
 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->orderBy('id', 'DESC')
			->whereRefThnAjaranId(SV::get('ref_thn_ajaran_id'))
			->whereJenisDaftar($jenis_daftar)
			->paginate(10);		
		return $pendaftaran;
 	}

 	public function getAll(){
 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->orderBy('id', 'DESC')
			->whereRefThnAjaranId(SV::get('ref_thn_ajaran_id'))
			->paginate(10);	
		return $pendaftaran; 		
 	}

 	//get all record tanpa pagination
 	public function getAllPlain(){
 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->orderBy('id', 'DESC')
			->whereRefThnAjaranId(SV::get('ref_thn_ajaran_id'))
			->get();	
		return $pendaftaran; 		
 	}



 	public function getAllSearch($value){
  		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->whereRefThnAjaranId(SV::get('ref_thn_ajaran_id'))
			->orderBy('id', 'DESC')
			->where('no_pendaftaran', 'like', '%'.$value.'%')
			->orWhere('nama', 'like', '%'.$value.'%')			
			->paginate(10);	
		return $pendaftaran; 			
 	}



 	public function getBySearch($value, $jenis_daftar = NULL){
 		if($jenis_daftar == NULL){
 			$pendaftaran =  $this->getAllSearch($value);
 		}else{
	 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
				->orderBy('id', 'DESC')
				->whereRefThnAjaranId(SV::get('ref_thn_ajaran_id'))
				->where('no_pendaftaran', 'like', '%'.$value.'%')
				->orWhere('nama', 'like', '%'.$value.'%')					
				->whereJenisDaftar($jenis_daftar)
				->paginate(10);		
 		}
 		return $pendaftaran;
 	}



 	/* 
 	* ======================================
	* query khusus pendaftaran utk level baa 
	* ======================================
 	*/
  	public function getAllBaa(){
 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->orderBy('id', 'DESC')
			->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
			->paginate(10);	
		return $pendaftaran; 		
 	}	
 	public function getByJenisDaftarBaa($jenis_daftar){
 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->orderBy('id', 'DESC')
			->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
			->whereJenisDaftar($jenis_daftar)
			->paginate(10);		
		return $pendaftaran;
 	}

 

 	//get all record tanpa pagination
 	public function getAllPlainBaa(){
 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->orderBy('id', 'DESC')
			->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
			->get();	
		return $pendaftaran; 		
 	}



 	public function getAllSearchBaa($value){
  		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
			->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
			->orderBy('id', 'DESC')
			->where('no_pendaftaran', 'like', '%'.$value.'%')
			->orWhere('nama', 'like', '%'.$value.'%')			
			->paginate(10);	
		return $pendaftaran; 			
 	}



 	public function getBySearchBaa($value, $jenis_daftar = NULL){
 		if($jenis_daftar == NULL){
 			$pendaftaran =  $this->getAllSearch($value);
 		}else{
	 		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2', 'mst_photo', 'mst_berkas')
				->orderBy('id', 'DESC')
				->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
				->where('no_pendaftaran', 'like', '%'.$value.'%')
				->orWhere('nama', 'like', '%'.$value.'%')					
				->whereJenisDaftar($jenis_daftar)
				->paginate(10);		
 		}
 		return $pendaftaran;
 	}

 	/* 
 	* ======================================
	* END of query khusus pendaftaran utk level baa 
	* ======================================
 	*/


}