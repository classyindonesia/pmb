<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\Biodata;
use Illuminate\Contracts\Bus\SelfHandling;

class updateBiodata extends Command implements SelfHandling {


	public $input_biodata;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($input_biodata)
	{
		$this->input_biodata = $input_biodata;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
 
		$b = Biodata::findOrFail($this->input_biodata['id']);
		$b->nama 	= $this->input_biodata['nama'];

		$b->alamat 							= $this->input_biodata['alamat'];
		$b->mst_pendaftaran_id 				= $this->input_biodata['mst_pendaftaran_id'];
		$b->ref_agama_id 					= $this->input_biodata['ref_agama_id'];
		$b->tempat_lahir 					= $this->input_biodata['tempat_lahir'];
		$b->tgl_lahir 						= $this->input_biodata['tgl_lahir'];
		$b->ref_kota_id 					= $this->input_biodata['ref_kota_id'];
		$b->jenis_kelamin 					= $this->input_biodata['jenis_kelamin'];
		$b->ref_sma_id 						= $this->input_biodata['ref_sma_id'];
		$b->tahun_lulus 					= $this->input_biodata['tahun_lulus'];
		$b->no_ijazah 						= $this->input_biodata['no_ijazah'];
		$b->alamat_sekolah 					= $this->input_biodata['alamat_sekolah'];
		$b->no_hp 							= $this->input_biodata['no_hp'];
		$b->ref_identitas_id 				= $this->input_biodata['ref_identitas_id'];
		$b->no_identitas 					= $this->input_biodata['no_identitas'];
		$b->ref_status_daftar_ulang_id 		= $this->input_biodata['ref_status_daftar_ulang_id'];
		$b->ref_ukuran_almamater_id 		= $this->input_biodata['ref_ukuran_almamater_id'];
		$b->nama_ortu_ayah 					= $this->input_biodata['nama_ortu_ayah'];
		$b->nama_ortu_ibu 					= $this->input_biodata['nama_ortu_ibu'];
		$b->ref_penghasilan_ortu_id_ayah 	= $this->input_biodata['ref_penghasilan_ortu_id_ayah'];
		$b->ref_penghasilan_ortu_id_ibu 	= $this->input_biodata['ref_penghasilan_ortu_id_ibu'];
		$b->ref_pekerjaan_ortu_id_ayah 		= $this->input_biodata['ref_pekerjaan_ortu_id_ayah'];
		$b->ref_pekerjaan_ortu_id_ibu 		= $this->input_biodata['ref_pekerjaan_ortu_id_ibu'];
		$b->ket_ortu_ayah 					= $this->input_biodata['ket_ortu_ayah'];
		$b->ket_ortu_ibu 					= $this->input_biodata['ket_ortu_ibu'];
		$b->alamat_ortu 					= $this->input_biodata['alamat_ortu'];
		$b->ref_kota_id_ortu 				= $this->input_biodata['ref_kota_id_ortu'];
		$b->no_hp_ortu 						= $this->input_biodata['no_hp_ortu'];
		$b->jml_saudara 					= $this->input_biodata['jml_saudara'];
		$b->anak_ke 						= $this->input_biodata['anak_ke'];
 		$b->save();

 		return $b;
 
	}

}
