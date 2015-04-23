<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createTesTulis;
use App\Http\Requests\updateTesTulis;
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
		$tt_home = true;
		$tt = TesTulis::with('mst_pendaftaran', 'ref_ruang')->paginate(10);
		return view($this->base_view.'index', compact('tt', 'tt_home'));
	}


	public function create(RuangRepository $r){
		$kode_ruang = ['- pilih ruang -'];
		foreach($r->getAll() as $list){
			$kode_ruang[$list->kode_ruang] = $list->nama;
		}

		return view($this->base_view.'popup.create', compact('kode_ruang'));
	}



	public function insert(createTesTulis $request, PendaftaranRepository $p, RuangRepository $r){
		$pendaftar = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
		$ruang = $r->getByKodeRuang($request->kode_ruang);
		$pendaftar_ruang = TesTulis::whereMstPendaftaranId($pendaftar->id)->whereRefRuangId($ruang->id)->first();
		if(count($pendaftar_ruang)<=0){
			$data = [
				'mst_pendaftaran_id'	=> $pendaftar->id,
				'ref_ruang_id'			=> $ruang->id
			];
			TesTulis::create($data);
			return 'ok';			
		}else{
		$response = response()->json(['error' => 'nomor pendaftaran sudah ada pada ruangan tsb!'], 422);
		return $response;
		}

	}

	public function delete(){
		$t = TesTulis::findOrFail(\Input::get('id'));
		if(count($t)>0){
			$t->delete();
		}
		return 'ok';
	}


	public function edit($id, RuangRepository $r){
		$tt = TesTulis::findOrFail($id);
		$kode_ruang = ['- pilih ruang -'];
		foreach($r->getAll() as $list){
			$kode_ruang[$list->kode_ruang] = $list->nama;
		}		
		return view($this->base_view.'popup.edit', compact('tt', 'kode_ruang'));
	}

	public function update(updateTesTulis $request, PendaftaranRepository $p, RuangRepository $r){
		$tt = TesTulis::findOrFail($request->id);
		$p_get = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
		if(count($p_get)>0){
			$r_get = $r->getByKodeRuang($request->get('kode_ruang'));
			$tt->mst_pendaftaran_id = $p_get->id;
			$tt->ref_ruang_id = $r_get->id;
			$tt->save();
			return 'ok';			
		}else{
			$response = response()->json(['error' => 'nomor pendaftaran tdk ditemukan dalam database!'], 422);
			return $response;
		}
	}





}
