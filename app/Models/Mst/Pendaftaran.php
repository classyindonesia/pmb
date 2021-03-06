<?php 

namespace App\Models\Mst;

use App\Helpers\SetupVariable;
use App\Models\Mst\Berkas;
use App\Models\Mst\Biodata;
use App\Models\Mst\Pengumuman;
use App\Models\Mst\Photo;
use App\Models\Mst\TesSkill;
use App\Models\Mst\TesTulis;
use App\Models\Mst\User;
use App\Models\Mst\ValidasiBiodata;
use App\Models\Ref\Prodi;
use App\Models\Ref\Sma;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Pendaftaran extends Eloquent
{

    protected $table = 'mst_pendaftaran';
    
    protected $fillable = [
        'no_pendaftaran',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'jenis_kelamin',
        'no_hp',
        'thn_lulus',
        'no_ijazah',
        'ref_sma_id',
        'ref_prodi_id1',
        'ref_prodi_id2',
        'ref_gelombang_id',
        'jenis_daftar',
        'keterangan_sma',
        'ref_thn_ajaran_id',
        'alamat_email',
        'is_valid'
        ];


    protected $appends = ['alamat', 'nama', 'tempat_lahir'];


    public function mst_validasi_biodata()
    {
        return $this->hasOne(ValidasiBiodata::class, 'mst_pendaftaran_id');
    }

    public function mst_user()
    {
        return $this->belongsTo(User::class, 'mst_user_id');
    }

    public function mst_photo()
    {
        return $this->hasOne(Photo::class, 'mst_pendaftaran_id');
    }


    public function mst_berkas()
    {
        return $this->hasMany(Berkas::class, 'mst_pendaftaran_id');
    }


    public function ref_sma()
    {
        return $this->belongsTo(Sma::class, 'ref_sma_id');
    }

    public function ref_prodi1()
    {
        return $this->belongsTo(Prodi::class, 'ref_prodi_id1');
    }

    public function ref_prodi2()
    {
        return $this->belongsTo(Prodi::class, 'ref_prodi_id2');
    }
    public function mst_tes_tulis()
    {
        return $this->hasOne(TesTulis::class, 'mst_pendaftaran_id');
    }



    public function mst_tes_skill()
    {
        return $this->hasMany(TesSkill::class, 'mst_pendaftaran_id');
    }

    public function mst_pengumuman()
    {
        return $this->hasOne(Pengumuman::class, 'mst_pendaftaran_id');
    }



    public function mst_biodata()
    {
        return $this->hasOne(Biodata::class, 'mst_pendaftaran_id');
    }


    //format = Tahun_Bln_Tgl_Nomor_Urut
    //hasil = 1503250001
    public function createNoPendaftaran()
    {
        $thn_ajaran = SetupVariable::get('ref_thn_ajaran_id');
 
        $no_urut_akhir = self::orderBy('id', 'DESC')->first();

        if (count($no_urut_akhir)>0) {
            //handle kondisi jika sudah ganti thn
        $thn_kode = substr($no_urut_akhir->no_pendaftaran, 0, 4);
            $thn_skrg = date('Y');
            if ($thn_kode != $thn_skrg) {
                $thn =  $thn_skrg;
                $urut_akhir = 0;
                $urut_akhir = $urut_akhir+1;
            } else {
                $thn =  substr($no_urut_akhir->no_pendaftaran, 0, 4);
                $urut_akhir = substr($no_urut_akhir->no_pendaftaran, 8, 11);
                $urut_akhir = $urut_akhir+1;
            }
        } else {
            $urut_akhir = 1;
        }
    
        if ($urut_akhir < 10) {
            $urut_akhir = '0'.$urut_akhir;
        }
        if ($urut_akhir < 100) {
            $urut_akhir = '0'.$urut_akhir;
        }
        if ($urut_akhir < 1000) {
            $urut_akhir = '0'.$urut_akhir;
        }

        $no_pendaftaran = date('Ymd').$urut_akhir;
        return $no_pendaftaran;
    }

 




 /* custom attribute */
    public function setNamaAttribute($nama)
    {
        return $this->attributes['nama'] = strtoupper($nama);
    }
    
    public function setTempatLahirAttribute($tempat_lahir)
    {
        return $this->attributes['tempat_lahir'] = strtoupper($tempat_lahir);
    }
    public function setAlamatAttribute($alamat)
    {
        return $this->attributes['alamat'] = strtoupper($alamat);
    }



    public function getTempatLahirAttribute()
    {
        $tempat_lahir = $this->attributes['tempat_lahir'];
        return $tempat_lahir = strtoupper($tempat_lahir);
    }

    public function getNamaAttribute()
    {
        $nama = $this->attributes['nama'];
        return $nama = strtoupper($nama);
    }

    public function getAlamatAttribute()
    {
        $alamat = $this->attributes['alamat'];
        return $alamat = strtoupper($alamat);
    }
 /* end of custom attribute */
}
