<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\GantiProdi;
use App\Models\Mst\Pendaftaran;
use Illuminate\Http\Request;

class GantiProdiController extends Controller {

	private $base_view = 'konten.backend.request_ganti_prodi.';

	public function __construct(){
		view()->share('request_pergantian_prodi_home', true);
		view()->share('base_view', $this->base_view);

	}


 
	public function index(){
		$data = GantiProdi::with('mst_pendaftaran', 'ref_prodi', 'ref_prodi_awal')->orderBy('id', 'DESC')->paginate(10);
		return view($this->base_view.'index', compact('data'));
	}


	public function popup_request($id){
		$data = GantiProdi::find($id);
		return view($this->base_view.'popup.request', compact('data'));
	}

	public function submit_request(Request $request){
		$o = GantiProdi::find($request->id);
		$o->status = $request->status;
		$o->save();

		if($request->status == 1){
			$p = Pendaftaran::find($request->mst_pendaftaran_id);
			if($request->prodi_pilihan == 1){
				$p->ref_prodi_id1 = $request->ref_prodi_id;
			}else{
				$p->ref_prodi_id2 = $request->ref_prodi_id;
			}
			$p->save();
		}




		return 'ok';
	}


 

}
