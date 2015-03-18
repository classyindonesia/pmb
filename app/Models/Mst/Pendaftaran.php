<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;

use App\Helpers\SetupVariable;
use App\Models\Ref\Prodi;

class Pendaftaran extends Eloquent{
	protected $table = 'mst_pendaftaran';
	protected $fillable = [
		'no_pendaftaran', 
		'nama', 
		'tempat_lahir', 
		'tgl_lahir',
		'alamat',
		'jenis_kelamin',
		'no_hp',
		'thn_lulus',
		'no_ijazah',
		'ref_sma_id',
		'ref_prodi_id1',
		'ref_prodi_id2',
		'ref_gelombang_id',
		'jenis_daftar'
		];


	public function mst_user(){
		return $this->belongsTo('\App\Models\Mst\User', 'mst_user_id');
	}






	//format = Tahun_Bln_Tgl_Nomor_Urut
	//hasil = 1503250001
	public function createNoPendaftaran($ref_prodi_id){
	$thn_ajaran = SetupVariable::get('ref_thn_ajaran_id');
	$prodi = Prodi::find($ref_prodi_id);

	$no_urut_akhir = self::orderBy('id', 'DESC')->first();

	if(count($no_urut_akhir)>0){
		//handle kondisi jika sudah ganti thn
		$thn_kode = substr($no_urut_akhir->no_pendaftaran, 0, 4);
		$thn_skrg = date('Y');
		if($thn_kode != $thn_skrg){
			$thn =  $thn_skrg;
			$urut_akhir = 0;
			$urut_akhir = $urut_akhir+1;
		}else{
			$thn =  substr($no_urut_akhir->no_pendaftaran, 0,4);
			$urut_akhir = substr($no_urut_akhir->no_pendaftaran, 8, 11);
			$urut_akhir = $urut_akhir+1;			
		}


	}else{
		$urut_akhir = 1;	
	}
    
    if($urut_akhir < 10) $urut_akhir = '0'.$urut_akhir;
    if($urut_akhir < 100) $urut_akhir = '0'.$urut_akhir;
    if($urut_akhir < 1000) $urut_akhir = '0'.$urut_akhir;
    if($urut_akhir < 10000) $urut_akhir = '0'.$urut_akhir;


    $no_pendaftaran = date('Ymd').$urut_akhir;

    return $no_pendaftaran;

	}

 


	

}