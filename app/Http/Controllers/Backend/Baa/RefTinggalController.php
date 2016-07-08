<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefTinggal;
use App\Models\Ref\Tinggal;
use Illuminate\Http\Request;

class RefTinggalController extends Controller
{


    private $base_view = 'konten.backend.baa.ref_tinggal.';
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
        $ref_tinggal_nav_home = true;
        $ref_tinggal = Tinggal::orderBy('id', 'DESC')->paginate(10);
        return view($this->base_view.'index', compact('ref_tinggal', 'ref_tinggal_home', 'ref_tinggal_nav_home'));
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
    public function store(CreateOrUpdateRefTinggal $request)
    {
        $data = [
            'nama' => $request->nama,
        ];
        Tinggal::create($data);
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
        $ref_tinggal  = Tinggal::findOrFail($id);
        return view($this->base_view.'popup.edit', compact('ref_tinggal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateOrUpdateRefTinggal $request)
    {
        $o = Tinggal::findOrFail($id);
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
        $o = Tinggal::find($request->id);
        $o->delete();
        return 'ok';
    }
}
