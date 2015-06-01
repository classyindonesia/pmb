<?php namespace App\Http\Controllers\Backend\Baa;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefProdiPt;
use App\Models\Ref\PerguruanTinggi;
use App\Models\Ref\ProdiPt;
use Illuminate\Http\Request;

class RefProdiPtController extends Controller {


	private $base_view = 'konten.backend.baa.ref_prodi_pt.';
	private $base_view_biodata = 'konten.backend.baa.biodata.';



	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('biodata_home', true);
		view()->share('base_view_biodata', $this->base_view_biodata);
	}

 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		$ref_prodi_pt_nav_home = true;
		$ref_prodi_pt = ProdiPt::orderBy('id', 'DESC')->with('ref_perguruan_tinggi')->paginate(10);
		return view($this->base_view.'index', compact('ref_prodi_pt', 'ref_prodi_pt_home', 'ref_prodi_pt_nav_home'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$ref_perguruan_tinggi = \Fungsi::get_dropdown(PerguruanTinggi::all(), 'perguruan tinggi');
		return view($this->base_view.'popup.create', compact('ref_perguruan_tinggi'));		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOrUpdateRefProdiPt $request)
	{
		$data = [
			'nama' => $request->nama,
			'ref_perguruan_tinggi_id'	=> $request->ref_perguruan_tinggi_id
 		];
		ProdiPt::create($data);
		return 'ok';
	}

 

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ref_perguruan_tinggi = \Fungsi::get_dropdown(PerguruanTinggi::all(), 'perguruan tinggi');		
		$ref_prodi_pt  = ProdiPt::findOrFail($id);
		return view($this->base_view.'popup.edit', compact('ref_prodi_pt', 'ref_perguruan_tinggi'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefProdiPt $request)
	{
		$o = ProdiPt::findOrFail($id);
		$o->nama = $request->nama;
		$o->ref_perguruan_tinggi_id = $request->ref_perguruan_tinggi_id;
 		$o->save();
		return 'ok';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Request $request)
	{
		$o = ProdiPt::find($request->id);
		$o->delete();
		return 'ok';
	}



}
