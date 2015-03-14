<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateOrUpdateRefGelombang;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Models\Ref\Gelombang;
use App\Models\Ref\ThnAjaran;

class RefGelombangController extends Controller {


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
		$ref_gelombang = Gelombang::with('ref_thn_ajaran')->orderBy('id', 'DESC')->paginate(10);
		$ref_gelombang_home = true;
		return view('konten.backend.ref.ref_gelombang.index', compact('ref_gelombang', 'ref_gelombang_home'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$ref_thn_ajaran = ThnAjaran::all();
		return view('konten.backend.ref.ref_gelombang.popup.create', compact('ref_thn_ajaran'));		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOrUpdateRefGelombang $request)
	{
		$o = new Gelombang;
		$o->ref_thn_ajaran_id = $request->ref_thn_ajaran_id;
		$o->nama = $request->nama;
		$o->biaya = $request->biaya;
		$o->save();
		return 'ok';
	}

 

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id){
		$ref_gelombang = Gelombang::findOrFail($id);
		$ref_thn_ajaran = ThnAjaran::all();
		return view('konten.backend.ref.ref_gelombang.popup.edit', compact('ref_gelombang', 'ref_thn_ajaran'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefGelombang $request)
	{
		$o = Gelombang::findOrFail($id);
		$o->ref_thn_ajaran_id = $request->ref_thn_ajaran_id;
		$o->nama = $request->nama;
		$o->biaya = $request->biaya;
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
		$o = Gelombang::findOrFail($id);
		$o->delete();
		return 'ok';
	}

}
