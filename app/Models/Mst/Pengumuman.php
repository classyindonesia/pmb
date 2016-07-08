<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Ref\Prodi;
use App\Models\Ref\StatusDaftarUlang;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{

    protected $table = 'mst_pengumuman';
    protected $fillable = ['mst_pendaftaran_id', 'ref_prodi_id', 'ref_status_daftar_ulang_id'];


    public function mst_pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
    }


    public function ref_prodi()
    {
        return $this->belongsTo(Prodi::class, 'ref_prodi_id');
    }

    public function ref_status_daftar_ulang()
    {
        return $this->belongsTo(StatusDaftarUlang::class, 'ref_status_daftar_ulang_id');
    }
}
