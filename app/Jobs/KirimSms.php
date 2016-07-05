<?php namespace App\Jobs;

use App\Jobs\Job;
use App\Models\Sms;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class KirimSms extends Job implements SelfHandling, ShouldQueue {

	use InteractsWithQueue, SerializesModels;

	public $pesan;
 	public $no_pendaftaran;
	public $no_hp;


	public function __construct($pesan, $no_pendaftaran, $no_hp){
		$this->pesan = $pesan;		
		$this->no_pendaftaran = $no_pendaftaran;
		$this->no_hp = $no_hp;
	}



	public function handle(){
		$s = new Sms;
		$s->kode_pendaftaran = $this->no_pendaftaran;
		$s->no_hp = $this->no_hp;
		$s->pesan = $this->pesan;
		$s->statusKirim = 0;
		$s->save();
	}

}
