<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Controllers\Controller;

/* requests */
use Illuminate\Http\Request;
use App\Http\Requests\UpdateBiodataCamaba;
use App\Http\Requests\updateProdiCamaba;


/* repo */
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Mst\PendaftaranOnlineRepository;
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Sma;


/* facades */
use Auth;


/* models */
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\PendaftaranOnline;

class PendaftaranController extends Controller {

	
	public function edit_biodata(PendaftaranRepository $biodata, Prodi $prodi, Sma $sma, PendaftaranOnlineRepository $p_online){
		$prodi = $prodi->getAll();
		$sma = $sma->getAll();
		$b = $biodata->getByEmail(Auth::user()->email);
		if(count($b)<=0){ //jika data di tabel pendaftaran utama blm ada,
			$jenis_daftar = 1;//online
			$b = $p_online->getByEmail(Auth::user()->email);
		}else{
			$jenis_daftar = 0;//offline
		}
		return view('konten.backend.dashboard.camaba.popup.edit_biodata', compact('b', 'prodi', 'sma', 'jenis_daftar'));
	}


	public function update_biodata(UpdateBiodataCamaba $request){
		if($request->jenis_daftar == 1){
			$o = PendaftaranOnline::find($request->id); //online
		}else{
			$o = Pendaftaran::find($request->id); //offline
		}

		$o->alamat = $request->alamat;
		$o->nama = $request->nama;
		$o->no_hp = $request->no_hp;
		$o->no_ijazah = $request->no_ijazah;
		$o->ref_sma_id = $request->ref_sma_id;
		$o->tempat_lahir = $request->tempat_lahir;
		$o->tgl_lahir = $request->tgl_lahir;
		$o->thn_lulus = $request->thn_lulus;
		$o->save();
		return $o;
	}




	public function edit_prodi(PendaftaranRepository $biodata, Prodi $prodi, Sma $sma, PendaftaranOnlineRepository $p_online){
		$prodi = $prodi->getAll();
		$b = $biodata->getByEmail(Auth::user()->email);
		if(count($b)<=0){ //jika data di tabel pendaftaran utama blm ada,
			$jenis_daftar = 1;//online
			$b = $p_online->getByEmail(Auth::user()->email);
		}else{
			$jenis_daftar = 0;//offline
		}
		return view('konten.backend.dashboard.camaba.popup.edit_prodi', compact('b', 'prodi', 'jenis_daftar'));
	}


	public function update_prodi(updateProdiCamaba $request){
		if($request->jenis_daftar == 1){
			$o = PendaftaranOnline::find($request->id); //online
		}else{
			$o = Pendaftaran::find($request->id); //offline
		}
		$o->ref_prodi_id1 = $request->ref_prodi_id1; 
		$o->save();
		return $o;
	}






}
