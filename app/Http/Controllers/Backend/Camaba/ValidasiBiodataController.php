<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Commands\insertBiodata;
use App\Commands\updateBiodata;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createBiodata;
use App\Models\Ref\Agama;
use App\Models\Ref\Identitas;
use App\Models\Ref\Kota;
use App\Models\Ref\PekerjaanOrtu;
use App\Models\Ref\Pendidikan;
use App\Models\Ref\PenghasilanOrtu;
use App\Models\Ref\PerguruanTinggi;
use App\Models\Ref\Prodi;
use App\Models\Ref\Sma;
use App\Models\Ref\StatusDaftarUlang;
use App\Models\Ref\Tinggal;
use App\Models\Ref\Transportasi;
use App\Models\Ref\UkuranAlmamater;
use App\Repositories\Mst\BiodataRepository;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class ValidasiBiodataController extends Controller {

	private $base_view = 'konten.backend.camaba.validasi_biodata.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('validasi_biodata_home', true);
	}


	public function index(BiodataRepository $b, PendaftaranRepository $p){

		$p_get = $p->getByEmail(\Auth::user()->email);
		$biodata =  $b->getPendaftarByIdRaw($p_get->id);



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
		$ref_transportasi = \Fungsi::get_dropdown(Transportasi::all(), 'jenis transportasi');
		$ref_prodi = \Fungsi::get_dropdown(Prodi::all(), 'prodi');
		//end of data referensi

		//pass variable to view
		$vars = compact(
				'biodata', 'ref_agama', 'ref_kota', 'ref_sma', 'ref_identitas',
				'ref_penghasilan_ortu', 'ref_pekerjaan_ortu', 'ket_ortu', 'ref_status_daftar_ulang',
				'ref_ukuran_almamater', 'ref_perguruan_tinggi', 'ref_tinggal', 'ref_pendidikan',
				'ref_transportasi', 'ref_prodi'
				);



		return view($this->base_view.'index', $vars);		
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
 

}
