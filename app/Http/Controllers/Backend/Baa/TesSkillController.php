<?php namespace App\Http\Controllers\Backend\Baa;

use App\Commands\InsertTesSkill;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createTesSkill;
use App\Http\Requests\updateTesSkill;
use App\Models\Mst\TesSkill;
use App\Models\Ref\TesSkill as RefTesSkill;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\RuangRepository;
use Illuminate\Http\Request;

class TesSkillController extends Controller {

	private $base_view = 'konten.backend.baa.tes_skill.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('tes_skill_home', true);
	}

	public function index(){
		$ts_home = true;
		$ts = TesSkill::with('mst_pendaftaran', 'ref_ruang')->paginate(10);
		return view($this->base_view.'index', compact('ts', 'ts_home'));
	}


	public function create(RuangRepository $r){
		$kode_ruang = $r->getDropDown();
		$ref_skill = \Fungsi::get_dropdown(RefTesSkill::all(), 'skill');
		return view($this->base_view.'popup.create', compact('kode_ruang', 'ref_skill'));
	}

 

	public function insert(createTesSkill $request, PendaftaranRepository $p, RuangRepository $r){
		$pendaftar = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
		$ruang = $r->getByKodeRuang($request->kode_ruang);
		$pendaftar_ruang = TesSkill::whereMstPendaftaranId($pendaftar->id)->whereRefRuangId($ruang->id)->first();
		if(count($pendaftar_ruang)<=0){
			$data = [
				'mst_pendaftaran_id'	=> $pendaftar->id,
				'ref_tes_skill_id'		=> $request->ref_tes_skill_id,
				'ref_ruang_id'			=> $ruang->id
			];
			TesSkill::create($data);
			return 'ok';			
		}else{
		$response = response()->json(['error' => 'nomor pendaftaran sudah ada pada ruangan tsb!'], 422);
		return $response;
		}

	}

	public function delete(){
		$t = TesSkill::findOrFail(\Input::get('id'));
		if(count($t)>0){
			$t->delete();
		}
		return 'ok';
	}


	public function edit($id, RuangRepository $r){
		$ts = TesSkill::findOrFail($id);
		$kode_ruang = $r->getDropDown();
		$ref_skill = \Fungsi::get_dropdown(RefTesSkill::all(), 'skill');
		return view($this->base_view.'popup.edit', compact('ts', 'kode_ruang', 'ref_skill'));
	}

	public function update(updateTesSkill $request, PendaftaranRepository $p, RuangRepository $r){
		$ts = TesSkill::findOrFail($request->id);
		$p_get = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
		if(count($p_get)>0){
			$r_get = $r->getByKodeRuang($request->get('kode_ruang'));
			$ts->mst_pendaftaran_id = $p_get->id;
			$ts->ref_ruang_id = $r_get->id;
			$ts->save();
			return 'ok';			
		}else{
			$response = response()->json(['error' => 'nomor pendaftaran tdk ditemukan dalam database!'], 422);
			return $response;
		}
	}


	public function import(RuangRepository $r){
		$kode_ruang = $r->getDropDown();
		$ref_skill = \Fungsi::get_dropdown(RefTesSkill::all(), 'skill');
		return view($this->base_view.'popup.import', compact('kode_ruang', 'ref_skill'));
	}


	public function do_import(Request $request, RuangRepository $r, PendaftaranRepository $p){
	$files = $request->file('userfile');
	$results = array();
 
				try {
					 
	                $data = new \Reader($files); 
	                $a = $data->rowcount($sheet_index=0); 
			            for($i=1;$i<=$a;$i++){
			                if($i != 1 && $i != 2){                    
			                      $no  	= trim($data->val($i, 'B')); //no pendaftaran
			                      $no2 	= trim($data->val($i, 'C')); // kode ruang
			                       if($no != NULL && $no2 != NULL){
			                       		//insert to queue job
			                       	\Queue::push(new InsertTesSkill($no2, $no, $request->ref_tes_skill_id));

				                       //	$results[] = compact('name');	         
			                    }
			                }
			            }
					} catch(Exception $e) {
				 		$name = $file->getClientOriginalName().' import gagal! ';
				 		$results[] = compact('name');   
                      		\Log::warning('data tidak ditemukan | tes skill');

			 		}
 
	return redirect()->route('baa_tes_skill.index');

	}


}
