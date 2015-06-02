<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Pengumuman;
use App\Models\Mst\TesSkill;
use App\Models\Mst\TesTulis;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class InformasiController extends Controller {

	
	public $base_view = 'konten.backend.camaba.informasi.';
	public $pendaftaran;

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('informasi_home', true);
		view()->share('blm_tersedia', '<span class="text-danger">belum tersedia</span>');
	}

	public function index(PendaftaranRepository $p){
		$p_get = $p->getByEmail(\Auth::user()->email);
		$pendaftaran = $p_get;


		$tes_tulis = TesTulis::whereMstPendaftaranId($p_get->id)->first();
		$tes_skill = TesSkill::whereMstPendaftaranId($p_get->id)->with('ref_ruang')->get();
		$pengumuman = Pengumuman::whereMstPendaftaranId($p_get->id)->first();
		return view($this->base_view.'index', compact('tes_tulis', 'tes_skill', 'pengumuman', 'pendaftaran'));
	}

}
