<?php namespace App\Http\Controllers\Backend\Baa;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateOrUpdateRefSkill;
use App\Models\Ref\TesSkill;
use Illuminate\Http\Request;

class RefTesSkillController extends Controller
{


    private $base_view = 'konten.backend.baa.ref_tes_skill.';
    private $base_view_tt = 'konten.backend.baa.tes_skill.';


    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('base_view_ts', $this->base_view_tt);
        view()->share('tes_skill_home', true);
    }

 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ref_tes_skill = TesSkill::orderBy('id', 'DESC')->paginate(10);
        $rs_home = true;
        return view($this->base_view.'index', compact('ref_tes_skill', 'rs_home'));
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
    public function store(CreateOrUpdateRefSkill $request)
    {
        $data = [
            'nama' => $request->nama,
        ];
        TesSkill::create($data);
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
        $ref_tes_skill  = TesSkill::findOrFail($id);
        return view($this->base_view.'popup.edit', compact('ref_tes_skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CreateOrUpdateRefSkill $request)
    {
        $o = TesSkill::findOrFail($id);
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
        $o = TesSkill::find($request->id);
        $o->delete();
        return 'ok';
    }
}
