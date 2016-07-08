<?php namespace App\Http\Controllers\Backend\Camaba\Step;

/* repo */
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Sma;
/* requests */
use App\Http\Requests\UpdateBiodataCamaba;
/* models */
use App\Models\Mst\Pendaftaran;
/* facades */
use Auth;

trait BiodataTrait
{

 

    public function edit_biodata(PendaftaranRepository $biodata, Prodi $prodi, Sma $sma)
    {
        $prodi = $prodi->getAll();
        $sma = \Fungsi::get_dropdown($sma->getAll(), 'sma');
        
        $b = $biodata->getByEmail(Auth::user()->email);
        if ($b->is_valid == 1) {
            abort(404);
        }
        return view('konten.backend.dashboard.camaba.popup.edit_biodata', compact('b', 'prodi', 'sma'));
    }


    public function update_biodata(UpdateBiodataCamaba $request)
    {
        $o = Pendaftaran::find($request->id);

        if ($o->is_valid == 1) {
            abort(404);
        }

        $o->alamat = $request->alamat;
        $o->nama = $request->nama;
        $o->keterangan_sma = $request->keterangan_sma;
        $o->no_hp = $request->no_hp;
        $o->no_ijazah = $request->no_ijazah;
        $o->ref_sma_id = $request->ref_sma_id;
        $o->tempat_lahir = $request->tempat_lahir;
        $o->tgl_lahir = $request->tgl_lahir;
        $o->thn_lulus = $request->thn_lulus;
        $o->jenis_kelamin = $request->jenis_kelamin;
        $o->save();
        return $o;
    }
}
