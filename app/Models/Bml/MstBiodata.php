<?php

namespace App\Models\Bml;

use App\Models\Bml\RefProdi;
use Illuminate\Database\Eloquent\Model;

class MstBiodata extends Model
{
    protected $connection = 'bml';
    protected $table = 'mst_biodata';
    
    protected $fillable = [
		'alamat_email',
		'alamat_fb',
		'alamat_twitter',
		'npm',
		'nama',
		'ref_agama_id',
		'tmp_lahir',
		'tgl_lahir',
		'alamat',
		'ref_kota_id',
		'jenis_kelamin',
		'ref_sma_id',
		'talus',
		'no_ijasah',
		'no_hp',
		'tgl_daftar',
		'ref_prodi_id',
		'ref_identitas_id',
		'no_identitas',
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
		'jml_sodara',
		'anak_ke',
		'alamat_sekolah',
		'ref_poll_id',
		'ref_thn_angkatan_id',
		'ref_ukuran_almamater_id',
		'status',
		'transfer',
    ];

    public function ref_prodi()
    {
    	return $this->belongsTo(RefProdi::class, 'ref_prodi_id');
    }
}
 