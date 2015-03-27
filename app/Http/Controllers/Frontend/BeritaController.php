<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller {

	private $base_view = 'konten.frontend.daftar_berita.';


	public function __construct(){
		view()->share('base_view', $this->base_view);
	}

	public function index(Request $request){
		if($request->get('search')){
			$berita = Berita::orderBy('id', 'DESC')
			->where('artikel', 'like', '%'.$request->get('search').'%')
			->orWhere('judul', 'like', '%'.$request->get('search').'%')
			->paginate(10);
		}else{
			$berita = Berita::orderBy('id', 'DESC')->paginate(10);			
		}
 		return view($this->base_view.'index', compact('berita'));
	}

	public function post($slug){
		$berita = Berita::findBySlug($slug);
		return view($this->base_view.'show_berita', compact('berita'));
	}

}
