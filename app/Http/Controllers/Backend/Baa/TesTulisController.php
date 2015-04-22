<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createTesTulis;
use App\Models\Mst\TesTulis;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\RuangRepository;
use Illuminate\Http\Request;

class TesTulisController extends Controller {

	private $base_view = 'konten.backend.baa.tes_tulis.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('tes_tulis_home', true);
	}

	public function index(){
		$tt = TesTulis::with('mst_pendaftaran', 'ref_ruang')->paginate(10);
		return view($this->base_view.'index', compact('tt'));
	}


	public function create(RuangRepository $r){
		$kode_ruang = \Fungsi::get_dropdown($r->getAll(), 'ruang');
		return view($this->base_view.'popup.create', compact('kode_ruang'));
	}



	public function insert(createTesTulis $request, PendaftaranRepository $p, RuangRepository $r){
		$pendaftar = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
		$ruang = $r->getByKodeRuang($request->kode_ruang);
		$data = [
			'mst_pendaftaran_id'	=> $pendaftar->id,
			'ref_ruang_id'			=> $ruang->id
		];
		TesTulis::create($data);
		return 'ok';
	}





}
