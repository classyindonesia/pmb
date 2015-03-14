<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateOrUpdateRefThnAjaran;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Ref\ThnAjaran;

class RefThnAjaranController extends Controller {

	
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
		$ref_thn_ajaran = ThnAjaran::orderBy('id', 'DESC')->paginate(10);
		$ref_thn_ajaran_home = true;
		return view('konten.backend.ref.ref_thn_ajaran.index', 
			compact('ref_thn_ajaran', 'ref_thn_ajaran_home'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('konten.backend.ref.ref_thn_ajaran.popup.create');		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOrUpdateRefThnAjaran $request)
	{
		$o = new ThnAjaran;
		$o->nama = $request->nama;
		$o->save();
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
		$ref_thn_ajaran = ThnAjaran::findOrFail($id);
		return view('konten.backend.ref.ref_thn_ajaran.popup.edit', compact('ref_thn_ajaran'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefThnAjaran $request)
	{
		$o = ThnAjaran::findOrFail($id);
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
		$d = ThnAjaran::findOrFail($request->id);
		$d->delete();
		return 'ok';
	}

}
