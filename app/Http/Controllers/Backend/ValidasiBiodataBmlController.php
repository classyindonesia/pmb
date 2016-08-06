<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\ValidasiBiodata;
use Illuminate\Http\Request;

class ValidasiBiodataBmlController extends Controller
{
    	
    public $base_view = 'konten.backend.validasi_biodata_bml.';
    protected $validasi_biodata;
    protected $request;

	public function __construct(ValidasiBiodata $validasi_biodata, Request $request)
	{
		$this->request = $request;
		$this->validasi_biodata = $validasi_biodata;
		view()->share('base_view', $this->base_view);
		view()->share('backend_validasi_biodata_home', true);
	}

	public function index(Request $request)
	{
		$search = trim($this->request->get('search'));
		if($search){
			$validasi_biodata = $this->validasi_biodata
									 ->whereHas( 'mst_pendaftaran', function($q) use($search){
									 		$q->where('nama', 'like', '%'.$search.'%');
									 })
									 ->orWhere('npm', 'like', '%'.$search.'%')
									 ->paginate(10);
		}else{
			$validasi_biodata = $this->validasi_biodata->paginate(10);			
		}
		$vars = compact('validasi_biodata');
		return view($this->base_view.'index', $vars);
	}

}
