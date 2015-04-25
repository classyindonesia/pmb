<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\TesSkill;
use App\Models\Mst\TesTulis;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class InformasiController extends Controller {

	
	public $base_view = 'konten.backend.camaba.informasi.';
	public $pendaftaran;

	public function __construct(PendaftaranRepository $p){
		view()->share('base_view', $this->base_view);
		view()->share('informasi_home', true);
		$p_get = $p->getByEmail(\Auth::user()->email);
		$this->pendaftaran = $p_get;
		view()->share('pendaftaran', $this->pendaftaran);
	}

	public function index(){
		$tes_tulis = TesTulis::whereMstPendaftaranId($this->pendaftaran->id)->first();
		$tes_skill = TesSkill::whereMstPendaftaranId($this->pendaftaran->id)->first();

		return view($this->base_view.'index', compact('tes_tulis', 'tes_skill'));
	}

}
