<?php 

namespace App\Services\Pendaftaran;

use App\Helpers\KirimSms;
use App\Jobs\KirimEmailNotifikasiValidasi;
use App\Models\Ref\Prodi;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class doValidasiPendaftaranService 
{

	protected $request;
	protected $pendaftaran;
	protected $sms;


	public function __construct(Request $request, PendaftaranRepository $pendaftaran, KirimSms $sms)
	{
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

        // $this->createNpm($b);

        /* kitim email notifikasi */
        $this->kirim_email_notifikasi($b);    
        return 'ok';	
    }


    public function createNpm($pendaftaran)
    {
    	//get record dari tabel pengumuman
    	$pengumuman = $this->pengumuman->whereMstPendaftaranId($pendaftaran->id)->first();
    	if(count($pengumuman)>0){
    		$prodi = Prodi::find($pengumuman->ref_prodi_id);
    		if(count($prodi)>0){

    			$thn_angkatan = substr(date('Y'), 2, 2);
    			$kode_prodi = $prodi->kode_prodi;

    		}
    	}

    }


}