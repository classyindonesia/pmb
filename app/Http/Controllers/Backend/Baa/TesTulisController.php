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
			$kode_ruang[$list->kode_ruang] = $list->nama.' [ '.$list->kode_ruang.' ]';
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
			$kode_ruang[$list->kode_ruang] = $list->nama.' [ '.$list->kode_ruang.' ]';
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


	public function import(RuangRepository $r){
		$kode_ruang = ['- pilih ruang -'];
		foreach($r->getAll() as $list){
			$kode_ruang[$list->kode_ruang] = $list->nama.' [ '.$list->kode_ruang.' ]';
		}
		return view($this->base_view.'popup.import', compact('kode_ruang'));
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

			                       	$p_getOne = $p->getOneByNoPendaftaran($no);
			                       	$r_getOne = $r->getByKodeRuang($no2);
			                       	if(count($p_getOne)>0 && count($r_getOne)>0){
			                       		$data_insert = ['mst_pendaftaran_id' => $p_getOne->id, 'ref_ruang_id' => $r_getOne->id];
			                       		TesTulis::create($data_insert);
			                       		\Log::info("no pendaftaran :".$no.' dan kode ruang :'.$no2.' inserted!');
			                       	}else{
			                       		\Log::warning("no pendaftaran :".$no.' dan kode ruang :'.$no2.' tidak ditemukan');
			                       	}

 
				                       	$results[] = compact('name');	         
			                    }
			                }
			            }
					} catch(Exception $e) {
				 		$name = $file->getClientOriginalName().' import gagal!';
				 		$results[] = compact('name');   
                      		\Log::warning('data tidak ditemukan');

			 		}
 
 /*
	 return array(
	        'files' => $results,
  	    );	
  	    */
 
	return redirect()->route('baa_tes_tulis.index');

	}


}
