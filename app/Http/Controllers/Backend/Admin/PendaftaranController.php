<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller {

	private $base_view = 'konten.backend.admin.pendaftaran.';

	
	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('pendaftaran_home', true);
	}


	public function index(){
		$pendaftaran = Pendaftaran::with('ref_sma', 'ref_prodi1', 'ref_prodi2')->orderBy('id', 'DESC')->paginate(10);
		return view($this->base_view.'index', compact('pendaftaran'));
	}


}
