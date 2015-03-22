<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KartuPendaftaranController extends Controller {

	private $base_view = 'konten.backend.camaba.kartu_pendaftaran.';

	public function __construct(){
		view()->share('kartu_pendaftaran_home', true);
	}

	public function index(){
		$base_view = $this->base_view;
		return view($this->base_view.'index', compact('base_view'));
	}

}
