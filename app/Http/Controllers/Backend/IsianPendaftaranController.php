<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Biodata;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class IsianPendaftaranController extends Controller
{
    public $base_view = 'konten.backend.isian_pendaftaran.';

    public function __construct()
    {
    	view()->share('base_view', $this->base_view);
    	view()->share('isian_pendaftaran_home', true);
    }

    public function index(PendaftaranRepository $b)
    {
    	$base_view_index = 'konten.backend.dashboard.camaba.';
    	$this->authorize('showIsianPendaftaran', Biodata::class);
        $biodata = $b->getByEmail(auth()->user()->email);
        $vars = compact('biodata', 'base_view_index');
        return view($this->base_view.'index', $vars);    	
    }



}
