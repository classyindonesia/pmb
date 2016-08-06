<?php 

namespace App\Services\Pendaftaran;

use App\Helpers\KirimSms;
use App\Helpers\SetupVariable;
use App\Jobs\KirimEmailNotifikasiValidasi;
use App\Models\Bml\MstBiodata;
use App\Models\Bml\RefProdi;
use App\Models\Mst\Biodata;
use App\Models\Mst\Pengumuman;
use App\Models\Mst\ValidasiBiodata;
use App\Models\Ref\Prodi;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class doValidasiPendaftaranService 
{

	protected $request;
	protected $mst_biodata; // pmb
	protected $pendaftaran;
	protected $sms;
    protected $bml;
    protected $ref_prodi_bml;
    protected $pengumuman;
    protected $validasi_biodata;


	public function __construct(Request $request, 
                                PendaftaranRepository $pendaftaran, 
                                KirimSms $sms,
                                MstBiodata $bml,
                                Pengumuman $pengumuman,
                                RefProdi $ref_prodi_bml,
                                Biodata $mst_biodata,
                                ValidasiBiodata $validasi_biodata
                            ){
        $this->validasi_biodata = $validasi_biodata;
		$this->mst_biodata = $mst_biodata;
		$this->ref_prodi_bml = $ref_prodi_bml;
		$this->pengumuman = $pengumuman;
        $this->bml = $bml;
		$this->sms = $sms;
		$this->request = $request;
		$this->pendaftaran = $pendaftaran;

	}

    private function kirim_email_notifikasi($b)
    {
        $subject = "validasi pendaftaran mahasiswa baru";
        $email = $b->alamat_email;
        $no_pendaftaran = $b->no_pendaftaran;
        $nama = $b->nama;
        \Queue::push(new KirimEmailNotifikasiValidasi($subject, $email, $nama, $no_pendaftaran));
        return 'ok';
    }

    public function handle()
    {
        $b = $this->pendaftaran->getByEmail(\Auth::user()->email);
        $b->is_valid = 1;
        $b->save();
 
        $this->sms->createUserNotifValidasi($b->no_pendaftaran, $b->nama, $b->no_hp);
        /* kitim email notifikasi */
        $this->kirim_email_notifikasi($b);    
        return 'ok';	
    }




}