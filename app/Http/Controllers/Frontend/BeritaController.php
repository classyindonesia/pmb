<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Berita;
use App\Models\Mst\LampiranBerita;
use App\Services\lampiranBerita\downloadLampiranBeritaService;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    private $base_view = 'konten.frontend.daftar_berita.';


    public function __construct()
    {
        view()->share('daftar_berita_home', true);
        view()->share('base_view', $this->base_view);
    }

    public function index(Request $request)
    {
        if ($request->get('search')) {
            $berita = Berita::orderBy('id', 'DESC')
            ->where('artikel', 'like', '%'.$request->get('search').'%')
            ->orWhere('judul', 'like', '%'.$request->get('search').'%')
            ->with('berita_to_lampiran')
            ->whereIsPublished(1)
            ->paginate(10);
        } else {
            $berita = Berita::orderBy('id', 'DESC')
                              ->with('berita_to_lampiran')
                              ->whereIsPublished(1)
                              ->paginate(10);
        }
        return view($this->base_view.'index', compact('berita'));
    }

    public function post($slug)
    {
        $hashids = new \Hashids\Hashids('qertymyr');
        $berita = Berita::where('slug', $slug)->whereIsPublished(1)->first();
        return view($this->base_view.'show_berita', compact('berita', 'hashids'));
    }


    
    public function download_lampiran($id, downloadLampiranBeritaService $lampiran)
    {
        return $lampiran->handle($id);
    }
}
