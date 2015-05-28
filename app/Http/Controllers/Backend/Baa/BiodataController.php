<?php namespace App\Http\Controllers\Backend\Baa;

use App\Commands\exportPdfBiodata;
use App\Commands\insertBiodata;
use App\Commands\updateBiodata;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createBiodata;
use App\Models\Mst\Biodata;
use App\Models\Ref\Agama;
use App\Models\Ref\Identitas;
use App\Models\Ref\Kota;
use App\Models\Ref\PekerjaanOrtu;
use App\Models\Ref\Pendidikan;
use App\Models\Ref\PenghasilanOrtu;
use App\Models\Ref\PerguruanTinggi;
use App\Models\Ref\Sma;
use App\Models\Ref\StatusDaftarUlang;
use App\Models\Ref\Tinggal;
use App\Models\Ref\UkuranAlmamater;
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

		//query ke tabel pendaftaran
		$biodata = $b->getPendaftarById($mst_pendaftaran_id);


		//data referensi
		$ref_agama = \Fungsi::get_dropdown(Agama::all(), 'agama');
		$ref_kota = \Fungsi::get_dropdown(Kota::all(), 'kota');
		$ref_sma = \Fungsi::get_dropdown(Sma::all(), 'asal sekolah');
		$ref_identitas = \Fungsi::get_dropdown(Identitas::all(), 'jenis identitas');
		$ref_penghasilan_ortu = \Fungsi::get_dropdown(PenghasilanOrtu::all(), 'penghasilan ortu');
		$ref_pekerjaan_ortu = \Fungsi::get_dropdown(PekerjaanOrtu::all(), 'pekerjaan ortu');
		$ket_ortu = ['hidup' => 'masih hidup', 'meninggal' => 'telah meninggal'];
		$ref_status_daftar_ulang = \Fungsi::get_dropdown(StatusDaftarUlang::all(), 'status daftar ulang');
		$ref_ukuran_almamater = \Fungsi::get_dropdown(UkuranAlmamater::all(), 'ukuran almamater');
		$ref_perguruan_tinggi = \Fungsi::get_dropdown(PerguruanTinggi::all(), 'perguruan tinggi');
		$ref_tinggal = \Fungsi::get_dropdown(Tinggal::all(), 'jenis tinggal');
		$ref_pendidikan = \Fungsi::get_dropdown(Pendidikan::all(), 'pendidikan terakhir');

		//passing variable ke view
		$var = compact(
				'biodata', 'ref_agama', 'ref_kota', 'ref_sma', 
				'ref_identitas', 'ref_penghasilan_ortu',
				'ref_pekerjaan_ortu', 'ket_ortu',
				'ref_status_daftar_ulang', 'ref_ukuran_almamater',
				'ref_perguruan_tinggi', 'ref_tinggal', 'ref_pendidikan'
				);

		if(count($biodata)<=0){
			//kosong (tdk ada di dlm tabel pengumuman)
			return 0;
		}else{
			if(count($biodata->mst_biodata)>0){
				//jika di dlm tabel mst_biodata sudah ada record
				return view($this->base_view.'popup.edit', $var);				
			}else{
				//jika di dlm tabel mst_biodata belum ada record
				return view($this->base_view.'popup.create', $var);				
			}
		}

	}



	public function update(createBiodata $request, BiodataRepository $b){
		$biodata = $b->getPendaftarById($request->mst_pendaftaran_id);
		if(count($biodata->mst_biodata)>0){
			$update = $this->dispatch(new updateBiodata($request->all()));
	 		return $update;
		}else{
			$insert = $this->dispatch(new insertBiodata($request->all()));
	 		return $insert;
		}

	}



	public function validasi(Request $request){
		$b = Biodata::findOrFail($request->id);
		if($b->status == 0){
			$b->status = 1;			
		}else{
			$b->status = 0; 
		}
		$b->save();

		return 'ok';
	}


	public function cetak_pdf($id){
		return $this->dispatch(new exportPdfBiodata($id)); 
	}


}
