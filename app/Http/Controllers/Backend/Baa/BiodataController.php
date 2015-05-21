<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Ref\Agama;
use App\Models\Ref\Kota;
use App\Repositories\Mst\BiodataRepository;
use Illuminate\Http\Request;

class BiodataController extends Controller {

		
	private $base_view = 'konten.backend.baa.biodata.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('biodata_home', true);
	}


	public function index(BiodataRepository $b, Request $request){
		$biodata_nav_home = true;
		$cari = $request->get('search');
		if($cari){
			$biodata = $b->getAllPencarian($cari);
		}else{
			$biodata = $b->getAll();
		}
		return view($this->base_view.'index', compact('biodata_nav_home', 'biodata'));
	}


	public function edit($mst_pendaftaran_id, BiodataRepository $b){
		$biodata = $b->getPendaftarById($mst_pendaftaran_id);


		//data referensi
		$ref_agama = \Fungsi::get_dropdown(Agama::all(), 'agama');
		$ref_kota = \Fungsi::get_dropdown(Kota::all(), 'kota');


		if(count($biodata)<=0){
			//kosong (tdk ada di dlm tabel pengumuman)
			return 0;
		}else{
			if(count($biodata->mst_biodata)>0){
				//jika di dlm tabel mst_biodata sudah ada record
				return view($this->base_view.'popup.edit', 
					compact('biodata', 'ref_agama', 'ref_kota'));				
			}else{
				//jika di dlm tabel mst_biodata belum ada record
				return view($this->base_view.'popup.create', 
					compact('biodata', 'ref_agama', 'ref_kota'));				
			}
		}

	}




}
