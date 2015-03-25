<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Berkas;
use App\Models\Mst\Photo;
use Illuminate\Http\Request;

class DataUploadCamabaController extends Controller {

	private $base_view = 'konten.backend.data_upload.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('data_upload_home', true);
	}

	public function index(){
		$upload_foto_home = true;
		$foto = Photo::with('mst_pendaftaran')
			->orderBy('id', 'DESC')
			->paginate(10);
		return view($this->base_view.'index', compact('upload_foto_home', 'foto'));
	}


	public function berkas(){
		$upload_berkas_home = true;
		$berkas = Berkas::with('mst_pendaftaran', 'ref_jenis_berkas')
			->orderBy('id', 'DESC')
			->paginate(10);
		return view($this->base_view.'berkas.index', compact('upload_berkas_home', 'berkas'));
	}

	public function view_foto($id){
		$foto = Photo::findOrFail($id);
		return view($this->base_view.'popup.view_foto', compact('foto'));
	}

	public function view_berkas($id){
		$berkas = Berkas::findOrFail($id);
		return view($this->base_view.'berkas.popup.view_berkas', compact('berkas'));		
	}

}
