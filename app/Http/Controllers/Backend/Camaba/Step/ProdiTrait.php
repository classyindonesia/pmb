<?php namespace App\Http\Controllers\Backend\Camaba\Step;

/* requests */
use App\Http\Requests\updateProdiCamaba;
/* facades */
use Auth;
/* repo */
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Sma;
/* models */
use App\Models\Mst\Pendaftaran;

trait ProdiTrait
{


    public function edit_prodi(PendaftaranRepository $biodata, Prodi $prodi, Sma $sma)
    {
        $prodi = $prodi->getAll();
        $b = $biodata->getByEmail(Auth::user()->email);

        if ($b->is_valid == 1) {
            abort(404);
        }

        return view('konten.backend.dashboard.camaba.popup.edit_prodi', compact('b', 'prodi'));
    }


    public function update_prodi(updateProdiCamaba $request)
    {
        $o = Pendaftaran::find($request->id);
        if ($o->is_valid == 1) {
            abort(404);
        }

        $o->ref_prodi_id1 = $request->ref_prodi_id1;
        $o->ref_prodi_id2 = $request->ref_prodi_id2;
        $o->save();
        return $o;
    }
}
