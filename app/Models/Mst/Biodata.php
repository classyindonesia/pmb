<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Ref\Agama;
use App\Models\Ref\Identitas;
use App\Models\Ref\Kota;
use App\Models\Ref\PekerjaanOrtu;
use App\Models\Ref\Pendidikan;
use App\Models\Ref\PenghasilanOrtu;
use App\Models\Ref\ProdiPt;
use App\Models\Ref\Sma;
use App\Models\Ref\Tinggal;
use App\Models\Ref\Transportasi;
use App\Models\Ref\UkuranAlmamater;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Biodata extends Eloquent
{
    protected $table = 'mst_biodata';
    protected $fillable = [

            // alamat
            'alamat_email',
            'alamat_fb',
            'alamat_twitter',

            'alamat',
            'ref_tinggal_id',
            'rt',
            'rw',
            'kode_pos',
            'kewarganegaraan',



            //data pribadi
            'mst_pendaftaran_id',
            'nama',
            'ref_agama_id',
            'tempat_lahir',
            'tgl_lahir',
            'ref_kota_id',
            'jenis_kelamin',
            'no_hp',
            'no_telepon',

            //sekolah
            'ref_sma_id',
            'tahun_lulus',
            'no_ijazah',
            'alamat_sekolah',
            'keterangan_sma',


            // identitas
            'ref_identitas_id',
            'no_identitas',

            //kampus(camaba)
            /*
            * -tgl pendaftaran, langsung ambil dr tabel mst_pendaftaran
            * -prodi : ambil dr tabel mst_pengumuman:ref_prodi_id
            */
            'ref_status_daftar_ulang_id',
            'ref_ukuran_almamater_id',

            //status ortu & wali
            'nama_ortu_ayah',
            'nama_ortu_ibu',
            'ref_penghasilan_ortu_id_ayah',
            'ref_penghasilan_ortu_id_ibu',
            'ref_pekerjaan_ortu_id_ayah',
            'ref_pekerjaan_ortu_id_ibu',
            'ket_ortu_ayah',
            'ket_ortu_ibu',
            'alamat_ortu',
            'ref_kota_id_ortu',
            'no_hp_ortu',
            'jml_saudara',
            'anak_ke',
            'tgl_lahir_ayah',
            'tgl_lahir_ibu',
            'ref_pendidikan_id_ayah',
            'ref_pendidikan_id_ibu',

            'ref_transportasi_id',
            'keterangan_perguruan_tinggi',
            'ref_prodi_id_pt',


            //other
            'status',   //0=bs edit,1=tdk bs edit
        ];

    protected $appends = [
        'fk__validasi_biodata_npm'
    ];

    public function getFkValidasiBiodataNpmAttribute()
    {
        $q = $this->mst_pendaftaran->mst_validasi_biodata()->first();
        if(count($q)>0){
            return $q->npm;
        }
        return null;
    }

 


    // manipulasi attribut
    public function setNamaAttribute($nama)
    {
        return $this->attributes['nama'] = \Fungsi::filter(strtoupper($nama));
    }


    public function setNamaOrtuAyahAttribute($nama_ortu_ayah)
    {
        return $this->attributes['nama_ortu_ayah'] = \Fungsi::filter(strtoupper($nama_ortu_ayah));
    }

    public function setNamaOrtuIbuAttribute($nama_ortu_ibu)
    {
        return $this->attributes['nama_ortu_ibu'] = \Fungsi::filter(strtoupper($nama_ortu_ibu));
    }

    public function setAlamatAtribute($alamat)
    {
        return $this->attributes['alamat'] = \Fungsi::filter(strtoupper($alamat));
    }


    public function setAlamatSekolahAtribute($alamat_sekolah)
    {
        return $this->attributes['alamat_sekolah'] = \Fungsi::filter(strtoupper($alamat_sekolah));
    }

    public function setAlamatOrtuAtribute($alamat_ortu)
    {
        return $this->attributes['alamat_ortu'] = \Fungsi::filter(strtoupper($alamat_ortu));
    }
    // end of manipulasi attribut


    //relasi

    public function ref_pendidikan_ayah()
    {
        return $this->belongsTo(Pendidikan::class, 'ref_pendidikan_id_ayah');
    }


    public function ref_pendidikan_ibu()
    {
        return $this->belongsTo(Pendidikan::class, 'ref_pendidikan_id_ibu');
    }



    public function mst_pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
    }

    public function ref_agama()
    {
        return $this->belongsTo(Agama::class, 'ref_agama_id');
    }

    public function ref_kota()
    {
        return $this->belongsTo(Kota::class, 'ref_kota_id');
    }

 
    public function ref_identitas()
    {
        return $this->belongsTo(Identitas::class, 'ref_identitas_id');
    }

    public function ref_ukuran_almamater()
    {
        return $this->belongsTo(UkuranAlmamater::class, 'ref_ukuran_almamater_id');
    }

    public function ref_pekerjaan_ortu_ayah()
    {
        return $this->belongsTo(PekerjaanOrtu::class, 'ref_pekerjaan_ortu_id_ayah');
    }
    public function ref_pekerjaan_ortu_ibu()
    {
        return $this->belongsTo(PekerjaanOrtu::class, 'ref_pekerjaan_ortu_id_ibu');
    }



    public function ref_penghasilan_ayah()
    {
        return $this->belongsTo(PenghasilanOrtu::class, 'ref_penghasilan_ortu_id_ayah');
    }
    public function ref_penghasilan_ibu()
    {
        return $this->belongsTo(PenghasilanOrtu::class, 'ref_penghasilan_ortu_id_ibu');
    }




    public function ref_kota_ortu()
    {
        return $this->belongsTo(Kota::class, 'ref_kota_id_ortu');
    }

    public function ref_sma()
    {
        return $this->belongsTo(Sma::class, 'ref_sma_id');
    }

    public function ref_tinggal()
    {
        return $this->belongsTo(Tinggal::class, 'ref_tinggal_id');
    }

    public function ref_transportasi()
    {
        return $this->belongsTo(Transportasi::class, 'ref_transportasi_id');
    }


    public function ref_prodi_pt()
    {
        return $this->belongsTo(ProdiPt::class, 'ref_prodi_id_pt');
    }
}
