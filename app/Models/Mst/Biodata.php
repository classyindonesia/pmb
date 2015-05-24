<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Biodata extends Eloquent{
	protected $table = 'mst_biodata';
	protected $fillable = [

			// alamat
			'alamat_email',
			'alamat_fb',
			'alamat_twitter',

			//data pribadi
			'mst_pendaftaran_id',
			'nama',
			'ref_agama_id',
			'tempat_lahir',
			'tgl_lahir',
			'alamat',
			'ref_kota_id',
			'jenis_kelamin',
			'no_hp',

			//sekolah
			'ref_sma_id',
			'tahun_lulus',
			'no_ijazah',
			'alamat_sekolah',


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

			//other
			'status',   //0=bs edit,1=tdk bs edit
		];

 

	public function setNamaAttribute($nama){
		return $this->attributes['nama'] = \Fungsi::filter(strtoupper($nama));
	}


	public function setNamaOrtuAyahAttribute($nama_ortu_ayah){
		return $this->attributes['nama_ortu_ayah'] = \Fungsi::filter(strtoupper($nama_ortu_ayah));
	}

	public function setNamaOrtuIbuAttribute($nama_ortu_ibu){
		return $this->attributes['nama_ortu_ibu'] = \Fungsi::filter(strtoupper($nama_ortu_ibu));
	}

	public function setAlamatAtribute($alamat){
		return $this->attributes['alamat'] = \Fungsi::filter(strtoupper($alamat));
	}


	public function setAlamatSekolahAtribute($alamat_sekolah){
		return $this->attributes['alamat_sekolah'] = \Fungsi::filter(strtoupper($alamat_sekolah));
	}


}