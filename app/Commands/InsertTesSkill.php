<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\TesSkill;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\RuangRepository;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class InsertTesSkill extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;


	public $no_pendaftaran;
	public $kode_ruang;
	public $ref_tes_skill_id;


	public function __construct($kode_ruang, $no_pendaftaran, $ref_tes_skill_id)
	{
		$ref_tes_skill_id = $this->ref_tes_skill_id;
		$no_pendaftaran = $this->no_pendaftaran;
		$kode_ruang = $this->kode_ruang;
	}


	public function handle(RuangRepository $r, PendaftaranRepository $p)
	{
       	$p_getOne = $p->getOneByNoPendaftaran($this->no_pendaftaran);
       	$r_getOne = $r->getByKodeRuang($this->kode_ruang);
       	if(count($p_getOne)>0 && count($r_getOne)>0){
       		$data_insert = [
       			'mst_pendaftaran_id' => $p_getOne->id, 
       			'ref_ruang_id' => $r_getOne->id,
       			'ref_tes_skill_id'	=> $this->ref_tes_skill_id,
       		];
       		TesSkill::create($data_insert);
       		\Log::info("no pendaftaran :".$this->no_pendaftaran.' dan kode ruang :'.$this->kode_ruang.' inserted! | tes tulis');
       	}else{
       		\Log::warning("no pendaftaran :".$this->no_pendaftaran.' dan kode ruang :'.$this->kode_ruang.' tidak ditemukan | tes tulis');
       	}
	}

}
