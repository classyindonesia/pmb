<?php namespace App\Http\Controllers\Backend\Baa;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefUkuranAlmamater;
use App\Models\Ref\UkuranAlmamater;
use Illuminate\Http\Request;

class RefUkuranAlmamaterController extends Controller {


	private $base_view = 'konten.backend.baa.ref_ukuran_almamater.';
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
		$ref_ukuran_almamater_nav_home = true;
		$ref_ukuran_almamater = UkuranAlmamater::orderBy('id', 'DESC')->paginate(10);
		return view($this->base_view.'index', compact('ref_ukuran_almamater', 'ref_ukuran_almamater_home', 'ref_ukuran_almamater_nav_home'));
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
	public function store(CreateOrUpdateRefUkuranAlmamater $request)
	{
		$data = [
			'nama' => $request->nama,
 		];
		UkuranAlmamater::create($data);
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
		$ref_ukuran_almamater  = UkuranAlmamater::findOrFail($id);
		return view($this->base_view.'popup.edit', compact('ref_ukuran_almamater'));		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateOrUpdateRefUkuranAlmamater $request)
	{
		$o = UkuranAlmamater::findOrFail($id);
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
		$o = UkuranAlmamater::find($request->id);
		$o->delete();
		return 'ok';
	}



}
