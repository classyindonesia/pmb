<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefAgama;
use App\Models\Ref\Agama;
use Illuminate\Http\Request;

class RefAgamaController extends Controller
{


    private $base_view = 'konten.backend.baa.ref_agama.';
    private $base_view_biodata = 'konten.backend.baa.biodata.';



    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('biodata_home', true);
        view()->share('base_view_biodata', $this->base_view_biodata);
    }

 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ref_agama_nav_home = true;
        $ref_agama = Agama::orderBy('id', 'DESC')->paginate(10);
        return view($this->base_view.'index', compact('ref_agama', 'ref_agama_home', 'ref_agama_nav_home'));
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
    public function store(CreateOrUpdateRefAgama $request)
    {
        $data = [
            'nama' => $request->nama,
        ];
        Agama::create($data);
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
        $ref_agama  = Agama::findOrFail($id);
        return view($this->base_view.'popup.edit', compact('ref_agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateOrUpdateRefAgama $request)
    {
        $o = Agama::findOrFail($id);
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
        $o = Agama::find($request->id);
        $o->delete();
        return 'ok';
    }
}
