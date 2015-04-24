<?php namespace App\Http\Controllers\Backend\Baa;

use App\Commands\InsertTesSkill;
use App\Commands\InsertPengumuman;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createPengumuman;
use App\Http\Requests\updatePengumuman;
use App\Models\Mst\Pengumuman;
use App\Models\Ref\Prodi;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Mst\PengumumanRepository;
use Illuminate\Http\Request;

class PengumumanController extends Controller {

	private $base_view = 'konten.backend.baa.pengumuman.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('pengumuman_home', true);
	}

	public function index(PengumumanRepository $png){
		$pengumuman = $png->getAll();
		return view($this->base_view.'index', compact('pengumuman'));
	}


	public function create(){
		$ref_prodi = \Fungsi::get_dropdown(Prodi::all(), 'prodi');
		return view($this->base_view.'popup.create', compact('ref_prodi'));
	}

 

	public function insert(createPengumuman $request, PendaftaranRepository $p, PengumumanRepository $png){
		$pendaftar = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
		$pendaftar_pengumuman = $png->getByNoPendaftaran($request->no_pendaftaran); 

		if(count($pendaftar_pengumuman)<=0){
			$data = [
				'mst_pendaftaran_id'	=> $pendaftar->id,
 				'ref_prodi_id'			=> $request->ref_prodi_id
			];
			Pengumuman::create($data);
			return 'ok';			
		}else{
			$response = response()->json(['error' => 'nomor pendaftaran sudah ada pada db!'], 422);
			return $response;
		}

	}

	public function delete(){
		$t = Pengumuman::findOrFail(\Input::get('id'));
		if(count($t)>0){
			$t->delete();
		}
		return 'ok';
	}


	public function edit($id){
		$png = Pengumuman::findOrFail($id);
  		$ref_prodi = \Fungsi::get_dropdown(Prodi::all(), 'prodi');
		return view($this->base_view.'popup.edit', compact('ref_prodi', 'png'));
	}

	public function update(updatePengumuman $request, PendaftaranRepository $p){
		$png = Pengumuman::findOrFail($request->id);
		$p_get = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));

		$png->mst_pendaftaran_id = $p_get->id;
		$png->ref_prodi_id = $request->ref_prodi_id;
		$png->save();
		return 'ok';			
	}


	public function import(){
		return view($this->base_view.'popup.import');
	}


	public function do_import(Request $request){
	$files = $request->file('userfile');

	try {
        $data = new \Reader($files); 
        $a = $data->rowcount($sheet_index=0); 
            for($i=1;$i<=$a;$i++){
                if($i != 1 && $i != 2){                    
                      $no  	= trim($data->val($i, 'B')); //no pendaftaran
                      $no2 	= trim($data->val($i, 'C')); // kode prodi
                       if($no != NULL && $no2 != NULL){
                       		//insert to queue job
                       	\Log::info('pengumuman, no pendaftaran : '.$no.', kode_prodi : '.$no2.' masuk queue job!');
                       	\Queue::push(new InsertPengumuman($no, $no2));
                     }
                }
            }
		} catch(Exception $e) {
    		\Log::warning('file bermasalah / data tidak ditemukan | import pengumuman');
 		}
 
	return redirect()->route('pengumuman.index');
	}


}
