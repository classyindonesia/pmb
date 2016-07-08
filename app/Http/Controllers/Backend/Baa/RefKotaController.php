<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefKota;
use App\Models\Ref\Kota;
use Illuminate\Http\Request;

class RefKotaController extends Controller
{


    private $base_view = 'konten.backend.baa.ref_kota.';
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
        $ref_kota_nav_home = true;
        $ref_kota = Kota::orderBy('id', 'DESC')->paginate(10);
        return view($this->base_view.'index', compact('ref_kota', 'ref_kota_home', 'ref_kota_nav_home'));
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
    public function store(CreateOrUpdateRefKota $request)
    {
        $data = [
            'nama' => $request->nama,
        ];
        Kota::create($data);
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
        $ref_kota  = Kota::findOrFail($id);
        return view($this->base_view.'popup.edit', compact('ref_kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateOrUpdateRefKota $request)
    {
        $o = Kota::findOrFail($id);
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
        $o = Kota::find($request->id);
        $o->delete();
        return 'ok';
    }
}
