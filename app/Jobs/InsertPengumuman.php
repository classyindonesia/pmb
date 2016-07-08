<?php namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Mst\Pengumuman;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsertPengumuman extends Job implements SelfHandling, ShouldQueue
{

    use InteractsWithQueue, SerializesModels;

    public $no_pendaftaran;
    public $kode_prodi;
    public $ref_status_daftar_ulang_id;

    public function __construct($no_pendaftaran, $kode_prodi, $ref_status_daftar_ulang_id)
    {
        $this->kode_prodi = $kode_prodi;
        $this->no_pendaftaran = $no_pendaftaran;
        $this->$ref_status_daftar_ulang_id = $ref_status_daftar_ulang_id;
    }

 

    public function handle(PendaftaranRepository $p, Prodi $prd)
    {
        $p_get = $p->getOneByNoPendaftaran($this->no_pendaftaran);
        if (count($p_get)>0) {
            $prd_get = $prd->getByKodeProdi($this->kode_prodi);
            $data_insert = [
                'mst_pendaftaran_id' => $p_get->id,
                'ref_prodi_id'        =>    $prd_get->id,
                'ref_status_daftar_ulang_id'    => $this->ref_status_daftar_ulang_id
            ];
            Pengumuman::create($data_insert);
            \Log::info("inserted! nomor pendaftaran ". $this->no_pendaftaran.", kode_prodi : ".$this->kode_prodi." | queue job success!");
        } else {
            \Log::error("error! nomor pendaftaran ". $this->no_pendaftaran."&".$this->kode_prodi." tidak ditemukan! | queue job failed!");
        }
    }
}
