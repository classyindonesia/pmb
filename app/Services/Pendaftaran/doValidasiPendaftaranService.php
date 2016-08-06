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

        if(SetupVariable::get('generate_npm_validasi') == 1 || SetupVariable::get('generate_npm_validasi') != null){
	        $npm = $this->createNpm($b);
	        if($npm != null){
                $this->createDataValidasi($b->id, $npm);
		        $this->mergeBiodataToBml($b, $npm);        	
	        }

        }

        /* kitim email notifikasi */
        $this->kirim_email_notifikasi($b);    
        return 'ok';	
    }




    public function urutAkhir($urut_akhir)
    {
    	$urut_akhir = $urut_akhir+1;
        if ($urut_akhir < 10) {
            $urut_akhir = '0'.$urut_akhir;
        }
        if ($urut_akhir < 100) {
            $urut_akhir = '0'.$urut_akhir;
        }
        if ($urut_akhir < 1000) {
            $urut_akhir = '0'.$urut_akhir;
        }    	
        return $urut_akhir;
    }




    private function getProdiBml($kode_prodi_pmb)
    {
		$ref_prodi_bml = $this->ref_prodi_bml->where('ref_pmb_prodi_id', '=', $kode_prodi_pmb)->first();

		if(count($ref_prodi_bml)>0){
			return $ref_prodi_bml->id;
		}else{
			return null;
		}
    }




    public function createNpm($pendaftaran)
    {
    	//get record dari tabel pengumuman
    	$pengumuman = $this->pengumuman->whereMstPendaftaranId($pendaftaran->id)->first();
    	if(count($pengumuman)>0){
    		$prodi = Prodi::find($pengumuman->ref_prodi_id);
    		if(count($prodi)>0){
    			$thn_angkatan = substr(date('Y'), 2, 2); //(2016 -> 16)
    			$kode_prodi = $prodi->kode_prodi;
    			$kode_prodi = $this->getProdiBml($kode_prodi);

    			// check npm dgn tahun ajaran dan prodi yg sama
    			$biodata = $this->bml
    							->where('npm', 'like', $thn_angkatan.'.'.$kode_prodi.'.%')
    							->orderBy('npm', 'DESC')
    							->first();

    			if(count($biodata)>0){
    				// jika ada
    				$arr_npm = collect(explode('.', $biodata->npm));
    				$npm_baru = $thn_angkatan.'.'.$kode_prodi.'.'.$this->urutAkhir($arr_npm->last());
    			}else{
    				$npm_baru = $thn_angkatan.'.'.$kode_prodi.'.'.$this->urutAkhir(0);
    			}
    			return $npm_baru;
    		}
    	}
    	return null;
    }


    public function createDataValidasi($mst_pendaftaran_id, $npm)
    {
        $data = [
            'mst_pendaftaran_id' => $mst_pendaftaran_id,
            'npm'   => $npm
        ];
        $insert_validasi = $this->validasi_biodata->create($data);
        return $insert_validasi;
    }


    public function mergeBiodataToBml($pendaftaran, $npm)
    {
    	$biodata  = $this->mst_biodata->where('mst_pendaftaran_id', '=', $pendaftaran->id)->first();

    	if(count($biodata)>0){
	    	$ref_prodi_bml_id = $biodata->mst_pendaftaran->mst_pengumuman->ref_prodi->fk__ref_prodi_bml_id;
	    	if($ref_prodi_bml_id != null){
		    	$data = [
		           'alamat_email' => $biodata->alamat_email,
		           'alamat_fb' => $biodata->alamat_fb,
		           'alamat_twitter' => $biodata->alamat_twitter,
		           'alamat' => $biodata->alamat,
		           'nama' => $biodata->nama,
		           'ref_agama_id' => $biodata->ref_agama_id,
		           'tmp_lahir' => $biodata->tempat_lahir,
		           'tgl_lahir' => $biodata->tgl_lahir,
		           'ref_kota_id' => $biodata->ref_kota_id,
		           'jenis_kelamin' => $biodata->jenis_kelamin,
		           'no_hp' => $biodata->no_hp,
		           'ref_sma_id' => $biodata->ref_sma_id,
		           'talus' => $biodata->tahun_lulus, 
		           'no_ijasah' => $biodata->no_ijazah,
		           'alamat_sekolah' => $biodata->alamat_sekolah,
		           'ref_identitas_id' => $biodata->ref_identitas_id,
		           'no_identitas' => $biodata->no_identitas,
		           'ref_ukuran_almamater_id' => $biodata->ref_ukuran_almamater_id,
		           'nama_ortu_ayah' => $biodata->nama_ortu_ayah,
		           'nama_ortu_ibu' => $biodata->nama_ortu_ibu,
		           'ref_penghasilan_ortu_id_ayah' => $biodata->ref_penghasilan_ortu_id_ayah,
		           'ref_penghasilan_ortu_id_ibu' => $biodata->ref_penghasilan_ortu_id_ibu,
		           'ref_pekerjaan_ortu_id_ayah' => $biodata->ref_pekerjaan_ortu_id_ayah,
		           'ref_pekerjaan_ortu_id_ibu' => $biodata->ref_pekerjaan_ortu_id_ibu,
		           'ket_ortu_ayah' => $biodata->ket_ortu_ayah,
		           'ket_ortu_ibu' => $biodata->ket_ortu_ibu,
		           'alamat_ortu' => $biodata->alamat_ortu,
		           'ref_kota_id_ortu' => $biodata->ref_kota_id_ortu,
		           'no_hp_ortu' => $biodata->no_hp_ortu,
		           'jml_sodara' =>  $biodata->jml_saudara,  
		           'anak_ke' => $biodata->anak_ke,
		           'status' =>$biodata->status,   //0=bs edit,1=tdk bs edit    

	         		// tambahan yg tdk ada di tabel mst_biodata:pmb
	         		'ref_prodi_id' => $ref_prodi_bml_id,
                    'npm'          => $npm
		    	];
		    	$insert_bml = $this->bml->create($data);
		    	return $insert_bml;
	    	}else{
	    		\Log::error('relasi ref_prodi dari pmb ke bml tidak ditemukan');
	    	}
    	}else{
    		\Log::info('no pendaftaran : '.$pendaftaran->no_pendaftaran.' tidak memiliki relasi ke tabel mst_biodata, status:ignored!');
    	}

    }


}