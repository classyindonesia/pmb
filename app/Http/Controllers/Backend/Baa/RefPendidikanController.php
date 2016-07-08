<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefPendidikan;
use App\Models\Ref\Pendidikan;
use Illuminate\Http\Request;

class RefPendidikanController extends Controller
{


    private $base_view = 'konten.backend.baa.ref_pendidikan.';
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
        $ref_pendidikan_nav_home = true;
        $ref_pendidikan = Pendidikan::orderBy('id', 'DESC')->paginate(10);
        return view($this->base_view.'index', compact('ref_pendidikan', 'ref_pendidikan_home', 'ref_pendidikan_nav_home'));
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
    public function store(CreateOrUpdateRefPendidikan $request)
    {
        $data = [
            'nama' => $request->nama,
        ];
        Pendidikan::create($data);
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
        $ref_pendidikan  = Pendidikan::findOrFail($id);
        return view($this->base_view.'popup.edit', compact('ref_pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateOrUpdateRefPendidikan $request)
    {
        $o = Pendidikan::findOrFail($id);
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
        $o = Pendidikan::find($request->id);
        $o->delete();
        return 'ok';
    }
}
