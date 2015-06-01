<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createOrUpdatePertanyaanPolling;
use App\Models\Mst\PertanyaanPolling;
use Illuminate\Http\Request;

class PollingController extends Controller {


	public $base_view = 'konten.backend.admin.polling.';

	public function __construct(){
		view()->share('polling_home', true);
		view()->share('base_view', $this->base_view);
	}


	public function index(){
		$polling = PertanyaanPolling::paginate(10);
		return view($this->base_view.'index', compact('polling'));
	}

	public function create_pertanyaan(){
		return view($this->base_view.'popup.create');
	}

	public function insert_pertanyaan(createOrUpdatePertanyaanPolling $request){
		$data = [
			'pertanyaan'	=> $request->pertanyaan,
			'judul'			=> $request->judul
		];
		$insert = PertanyaanPolling::create($data);
		return $insert;
	}


	public function edit_pertanyaan($mst_pertanyaan_polling_id){
		$polling = PertanyaanPolling::findOrFail($mst_pertanyaan_polling_id);
		return view($this->base_view.'popup.edit', compact('polling'));
	}

	public function update_pertanyaan(createOrUpdatePertanyaanPolling $request){
		$p = PertanyaanPolling::findOrFail($request->id);
		$p->pertanyaan = $request->pertanyaan;
		$p->judul		= $request->judul;
		$p->save();

		return $p;
	}


	public function del_pertanyaan(Request $request){
		$p = PertanyaanPolling::findOrFail($request->id);
		$p->delete();
		return 'ok';
	}








}
