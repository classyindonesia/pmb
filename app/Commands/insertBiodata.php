<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\Biodata;
use App\Models\Mst\Pendaftaran;
use Illuminate\Contracts\Bus\SelfHandling;

class insertBiodata extends Command implements SelfHandling {


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


	private function update_pendaftaran($mst_pendaftaran_id, $mst_biodata_id){
		$b = Biodata::findOrFail($mst_biodata_id);
		$p = Pendaftaran::findOrFail($mst_pendaftaran_id);
		$p->nama = $b->nama;
		$p->tempat_lahir = $b->tempat_lahir;
		$p->tgl_lahir	= $b->tgl_lahir;
		$p->alamat		= $b->alamat;
		$p->jenis_kelamin	= $b->jenis_kelamin;
		$p->no_hp 			= $b->no_hp;
		$p->thn_lulus		= $b->tahun_lulus;
		$p->no_ijazah		= $b->no_ijazah;
		$p->ref_sma_id		= $b->ref_sma_id;
		$p->save();
	}




	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		//insert ke dlm tabel mst_biodata
		$insert = Biodata::create($this->input_biodata);

		//update tabel mst_pendaftaran
		//$this->update_pendaftaran($insert->mst_pendaftaran_id, $insert->id);

		return $insert;
	}

}
