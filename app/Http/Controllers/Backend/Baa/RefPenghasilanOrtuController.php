<?php namespace App\Http\Controllers\Backend\Baa;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefPenghasilanOrtu;
use App\Models\Ref\PenghasilanOrtu;
use Illuminate\Http\Request;

class RefPenghasilanOrtuController extends Controller {


	private $base_view = 'konten.backend.baa.ref_penghasilan_ortu.';
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
		$ref_penghasilan_ortu_nav_home = true;
		$ref_penghasilan_ortu = PenghasilanOrtu::orderBy('id', 'DESC')->paginate(10);
		return view($this->base_view.'index', compact('ref_penghasilan_ortu', 'ref_penghasilan_ortu_home', 'ref_penghasilan_ortu_nav_home'));
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
	public function store(CreateOrUpdateRefPenghasilanOrtu $request)
	{
		$data = [
			'nama' => $request->nama,
 		];
		PenghasilanOrtu::create($data);
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
		$ref_penghasilan_ortu  = PenghasilanOrtu::findOrFail($id);
		return view($this->base_view.'popup.edit', compact('ref_penghasilan_ortu'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefPenghasilanOrtu $request)
	{
		$o = PenghasilanOrtu::findOrFail($id);
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
		$o = PenghasilanOrtu::find($request->id);
		$o->delete();
		return 'ok';
	}



}
