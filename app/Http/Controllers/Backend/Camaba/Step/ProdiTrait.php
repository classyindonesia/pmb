<?php namespace App\Http\Controllers\Backend\Camaba\Step;

 /* requests */
use App\Http\Requests\updateProdiCamaba;

/* facades */
use Auth;

/* repo */
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Sma;

/* models */
use App\Models\Mst\Pendaftaran;

trait ProdiTrait{


	public function edit_prodi(PendaftaranRepository $biodata, Prodi $prodi, Sma $sma){
		$prodi = $prodi->getAll();
		$b = $biodata->getByEmail(Auth::user()->email);
		return view('konten.backend.dashboard.camaba.popup.edit_prodi', compact('b', 'prodi'));
	}


	public function update_prodi(updateProdiCamaba $request){
		$o = Pendaftaran::find($request->id); 
		$o->ref_prodi_id1 = $request->ref_prodi_id1; 
		$o->save();
		return $o;
	}



}