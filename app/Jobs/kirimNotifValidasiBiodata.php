<?php namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Mst\Biodata;
use App\Models\Mst\Pendaftaran;
use App\Models\Sms;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class kirimNotifValidasiBiodata extends Job implements SelfHandling, ShouldQueue
{

    use InteractsWithQueue, SerializesModels;


    public $mst_biodata_id;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($mst_biodata_id)
    {
        $this->mst_biodata_id = $mst_biodata_id;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $b = Biodata::findOrFail($this->mst_biodata_id);

        $p = Pendaftaran::findOrFail($b->mst_pendaftaran_id);


        $pesan = 'Validasi Biodata Mahasiswa Baru atas nama '.$b->nama.' telah berhasil, 
				silahkan melanjutkan ke pembayaran melalui Bank yg telah ditentukan';

        $data = [
            'kode_pendaftaran'    => $p->no_pendaftaran,
            'no_hp'                => $b->no_hp,
            'pesan'                => $pesan,
            'statusKirim'        => 0
        ];
        //jika config sms notif validasi biodata aktif, maka sms dikirim
        if (\SV::get('sms_validasi_biodata_camaba') == 1) {
            $kirim_sms = Sms::create($data);
        }
    }
}
