<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Pengumuman;

class PengumumanRepository
{


    public function getByNoPendaftaran($no_pendaftaran)
    {
        $p = Pendaftaran::whereNoPendaftaran($no_pendaftaran)->first();
        $pp = Pengumuman::whereMstPendaftaranId($p->id)->first();
        return $pp;
    }



    public function getAll()
    {
        $pendaftaran = Pendaftaran::with('mst_pengumuman')
            ->orderBy('id', 'DESC')
            ->has('mst_pengumuman')
            ->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
            ->paginate(10);
        return $pendaftaran;
    }

    public function getAllPencarian($cari)
    {
        $pendaftaran = Pendaftaran::with('mst_pengumuman')
            ->orderBy('id', 'DESC')
            ->has('mst_pengumuman')
            ->where('nama', 'like', '%'.$cari.'%')
            ->orWhere('no_pendaftaran', 'like', '%'.$cari.'%')
            ->whereRefThnAjaranId(\Session::get('ref_thn_ajaran_id'))
            ->paginate(10);
        return $pendaftaran;
    }
}
