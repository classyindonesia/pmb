<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateOrUpdateProdi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ref\Prodi;

class RefProdiController extends Controller
{


    public function __construct()
    {
        view()->share('data_ref_global_home', true);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ref_prodi = Prodi::orderBy('id', 'DESC')->paginate(10);
        $ref_prodi_home = true;
        return view('konten.backend.ref.ref_prodi.index', compact('ref_prodi', 'ref_prodi_home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('konten.backend.ref.ref_prodi.popup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateOrUpdateProdi $request)
    {
        $o = new Prodi;
        $o->nama = $request->nama;
        $o->kode_prodi = $request->kode_prodi;
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
        $prodi = Prodi::findOrFail($id);
        return view('konten.backend.ref.ref_prodi.popup.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateOrUpdateProdi $request)
    {
        $o = Prodi::findOrFail($id);
        $o->nama = $request->nama;
        $o->kode_prodi = $request->kode_prodi;
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
        $o = Prodi::findOrFail($request->id);
        $o->delete();
        return 'ok';
    }
}
