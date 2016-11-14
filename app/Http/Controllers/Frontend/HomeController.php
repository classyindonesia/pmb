<?php namespace App\Http\Controllers\Frontend;

use App\Helpers\SetupVariable as SV;
use App\Http\Controllers\Controller;
use App\Models\Mst\Berita;
use App\Models\Mst\Hit;
use App\Models\Mst\SlideUtama;

class HomeController extends Controller
{

    private $base_view = 'konten.frontend.home.';

    public function __construct(Hit $hits)
    {
        $this->hits = $hits;
        view()->share('base_view', $this->base_view);
        view()->share('frontend_home', true);
    }



    public function index()
    {
        $hits = $this->hits;
        $foto_slide_utama = SlideUtama::take(10)->orderByRaw("RAND()")->get();
        $berita = Berita::orderBy('id', 'DESC')->take(SV::get('jml_berita_frontend'))->whereIsPublished(1)->get();
        return view($this->base_view.'index', compact('berita', 'foto_slide_utama', 'hits'));
    }
}
