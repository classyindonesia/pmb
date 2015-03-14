<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateOrUpdateRefSma;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Ref\Sma;

class RefSmaController extends Controller {

	public function __construct(){
		view()->share('data_ref_global_home', true);
	}

 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ref_sma = Sma::orderBy('id', 'DESC')->paginate(10);
		$ref_sma_home = true;
		return view('konten.backend.ref.ref_sma.index', compact('ref_sma', 'ref_sma_home'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('konten.backend.ref.ref_sma.popup.create');		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOrUpdateRefSma $request)
	{
		$data = [
			'nama' => $request->nama
		];
		Sma::create($data);
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
		$ref_sma  = Sma::findOrFail($id);
		return view('konten.backend.ref.ref_sma.popup.edit', compact('ref_sma'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefSma $request)
	{
		$o = Sma::findOrFail($id);
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
		$o = Sma::find($request->id);
		$o->delete();
		return 'ok';
	}

}
