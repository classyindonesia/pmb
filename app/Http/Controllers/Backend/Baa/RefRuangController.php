<?php namespace App\Http\Controllers\Backend\Baa;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefRuang;
use App\Models\Ref\Ruang;
use Illuminate\Http\Request;

class RefRuangController extends Controller {


	private $base_view = 'konten.backend.baa.ref_ruang.';
	private $base_view_tt = 'konten.backend.baa.tes_tulis.';


	public function __construct(){
		view()->share('base_view', $this->base_view);
		view()->share('base_view_tt', $this->base_view_tt);
		view()->share('tes_tulis_home', true);
	}

 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ref_ruang = Ruang::orderBy('id', 'DESC')->paginate(10);
		$ref_ruang_home = true;
		return view($this->base_view.'index', compact('ref_ruang', 'ref_ruang_home'));
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
	public function store(CreateOrUpdateRefRuang $request)
	{
		$data = [
			'nama' => $request->nama,
			'kode_ruang'	=> $request->kode_ruang
		];
		Ruang::create($data);
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
		$ref_ruang  = Ruang::findOrFail($id);
		return view($this->base_view.'popup.edit', compact('ref_ruang'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefRuang $request)
	{
		$o = Ruang::findOrFail($id);
		$o->nama = $request->nama;
		$o->kode_ruang = $request->kode_ruang;
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
		$o = Ruang::find($request->id);
		$o->delete();
		return 'ok';
	}



}
