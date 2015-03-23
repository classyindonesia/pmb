<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Helpers\KirimSms;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Berkas;
use App\Models\Mst\Photo;
use App\Repositories\Mst\PendaftaranRepository;
use Auth;
use Illuminate\Http\Request;


class ValidasiPendaftaranController extends Controller {

	private $base_view = 'konten.backend.camaba.validasi_pendaftaran.';

	public function __construct(){
		view()->share('validasi_pendaftaran_home', true);
	}
	
	public function index(PendaftaranRepository $p){
		$base_view = $this->base_view;
		$b = $p->getByEmail(Auth::user()->email);
		$f = Photo::where('mst_pendaftaran_id', '=', $b->id)->first();
		$berkas = Berkas::where('mst_pendaftaran_id', '=', $b->id)->first();
		return view($this->base_view.'index', compact('base_view', 'b', 'f', 'berkas'));
	}


	public function do_validasi(PendaftaranRepository $p, Request $request, KirimSms $sms){
		$b = $p->getByEmail(Auth::user()->email);
		$b->is_valid = 1;
		$b->save();
 
		$sms->createUserNotifValidasi($b->no_pendaftaran, $b->nama, $b->no_hp);
		return 'ok';
	}



}
