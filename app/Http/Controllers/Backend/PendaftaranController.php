<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreatePendaftaranOnline;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/* models */
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Gelombang;
use App\Repositories\Ref\Sma;
use App\Models\Mst\Pendaftaran;


/* helpers */
use App\Helpers\SetupVariable;


class PendaftaranController extends Controller {


	public function __construct(){
		view()->share('pendaftaran_home', true);
	}


	public function index(Prodi $prodi, Gelombang $gelombang, Sma $sma){
		$prodi = $prodi->getAll();
		$sma = $sma->getAll();
		$gelombang = $gelombang->getAll();
		return view('konten.backend.pendaftaran.index', compact('prodi', 'gelombang', 'sma'));
	}


	/** ======== isi pesan sms ===============
	 * Pendaftaran ONLINE PMB UNP Kediri oleh [NAMA], 
	 * 	Berhasil, Silahkan login ke website http://pmb.unpkediri.ac.id , 
	 *	dng username : xx, password : xx, 
	 *	untuk melengkapi persyaratan selanjutnya
	*/
	 public function create_user_camaba(){

	}



	public function store(CreatePendaftaranOnline $request, SetupVariable $sv){

		$o = new Pendaftaran;

		$o->no_pendaftaran = $o->createNoPendaftaran($request->ref_prodi_id1);
		$o->nama = $request->nama;
		$o->tgl_lahir = $request->tgl_lahir;
		$o->tempat_lahir = $request->tempat_lahir;
		$o->alamat 	= $request->alamat;
		$o->no_ijazah = $request->no_ijazah;
		$o->ref_gelombang_id = $request->ref_gelombang_id;
		$o->ref_prodi_id1 = $request->ref_prodi_id1;
		$o->ref_prodi_id2 = $request->ref_prodi_id2;
		$o->ref_sma_id = $request->ref_sma_id;
		$o->thn_lulus = $request->thn_lulus;
		$o->jenis_daftar = 0; //offline
		$o->no_hp = $request->no_hp;
		$o->ref_thn_ajaran_id = $sv->get('ref_thn_ajaran_id');
		$o->save();

		return 'ok';
	}


}
