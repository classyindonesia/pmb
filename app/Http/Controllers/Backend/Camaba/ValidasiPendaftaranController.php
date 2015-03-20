<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/* repos */
use App\Repositories\Mst\PendaftaranRepository;

/* facades */
use Auth;


class ValidasiPendaftaranController extends Controller {

	private $base_view = 'konten.backend.camaba.validasi_pendaftaran.';

	public function __construct(){
		view()->share('validasi_pendaftaran_home', true);
	}
	
	public function index(PendaftaranRepository $p){

		$base_view = $this->base_view;
		$b = $p->getByEmail(Auth::user()->email);
		return view($this->base_view.'index', compact('base_view', 'b'));
	}



}
