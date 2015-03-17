<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreatePendaftaranOnline;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/* models */
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Gelombang;
use App\Repositories\Ref\Sma;
use App\Models\Mst\Pendaftaran;


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


	public function store(CreatePendaftaranOnline $request){

		$o = new Pendaftaran;

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
		$o->save();

		return 'ok';
	}


}
