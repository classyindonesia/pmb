<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\Pengumuman;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsertPengumuman extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	public $no_pendaftaran;
	public $kode_prodi;

	public function __construct($no_pendaftaran, $kode_prodi){
		$this->kode_prodi = $kode_prodi;
		$this->no_pendaftaran = $no_pendaftaran;
	}

 

	public function handle(PendaftaranRepository $p, Prodi $prd)
	{
		$p_get = $p->getOneByNoPendaftaran($this->no_pendaftaran);
		if(count($p_get)>0){
			$prd_get = $prd->getByKodeProdi($this->kode_prodi);
			$data_insert = [
				'mst_pendaftaran_id' => $p_get->id,
				'ref_prodi_id'		=>	$prd_get->id
			];
			Pengumuman::create($data_insert);	
			\Log::info("inserted! nomor pendaftaran ". $this->no_pendaftaran.", kode_prodi : ".$this->kode_prodi." | queue job success!");
		}else{
			\Log::error("error! nomor pendaftaran ". $this->no_pendaftaran."&".$this->kode_prodi." tidak ditemukan! | queue job failed!");
		}
	}
}
