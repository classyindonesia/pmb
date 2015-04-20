<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\LampiranBerita;
use App\Models\SetupVariable;
use Illuminate\Http\Request;

class FileController extends Controller {

	private $base_view = 'konten.frontend.daftar_file.';


	public function __construct(){
		view()->share('daftar_file_home', true);
		view()->share('base_view', $this->base_view);
	}

	public function index(Request $request){
		$sv = new SetupVariable; 
		if($sv->get_val('show_list_file_public') != 1){
			abort(404);
		}



		$pencarian = $request->get('search');
		if($pencarian){
			$daftar_file = LampiranBerita::where('nama', 'like', '%'.$pencarian.'%')
				->orWhere('deskripsi', 'like', '%'.$pencarian.'%')
				->paginate(15);
		}else{
			$daftar_file = LampiranBerita::paginate(15);
		}
		$hashids = new \Hashids\Hashids('qertymyr');
		return view($this->base_view.'index', compact('daftar_file', 'hashids'));
	}

}
