<?php namespace App\Http\Controllers\Backend\Baa;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefPekerjaanOrtu;
use App\Models\Ref\PekerjaanOrtu;
use Illuminate\Http\Request;

class RefPekerjaanOrtuController extends Controller {


	private $base_view = 'konten.backend.baa.ref_pekerjaan_ortu.';
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
		$ref_pekerjaan_ortu_nav_home = true;
		$ref_pekerjaan_ortu = PekerjaanOrtu::orderBy('id', 'DESC')->paginate(10);
		return view($this->base_view.'index', compact('ref_pekerjaan_ortu', 'ref_pekerjaan_ortu_home', 'ref_pekerjaan_ortu_nav_home'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view($this->base_view.'popup.create');		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOrUpdateRefPekerjaanOrtu $request)
	{
		$data = [
			'nama' => $request->nama,
 		];
		PekerjaanOrtu::create($data);
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
		$ref_pekerjaan_ortu  = PekerjaanOrtu::findOrFail($id);
		return view($this->base_view.'popup.edit', compact('ref_pekerjaan_ortu'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefPekerjaanOrtu $request)
	{
		$o = PekerjaanOrtu::findOrFail($id);
		$o->nama = $request->nama;
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
		$o = PekerjaanOrtu::find($request->id);
		$o->delete();
		return 'ok';
	}



}
