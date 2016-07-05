<?php namespace App\Jobs;

use App\Jobs\Job;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class KirimEmailNotifikasiValidasi extends Job implements SelfHandling, ShouldQueue {

	use InteractsWithQueue, SerializesModels;

	public $email_to;
	public $subject;
	public $nama_penerima;
  	public $no_pendaftaran;

	public function __construct($subject, $email_to, $nama_penerima, $no_pendaftaran){
		$this->nama_penerima = $nama_penerima;
		$this->no_pendaftaran = $no_pendaftaran;
		$this->subject = $subject;
		$this->email_to = $email_to;
  	}




	public function handle(){
 		$pesan = 'Pendaftaran Online PMB UNP Kediri oleh '.$this->nama_penerima.', 
		telah berhasil melakukan validasi, nomor pendaftaran anda adalah : '.$this->no_pendaftaran;	

	    //data untuk ditaruh di view
		$data = [
			'konten' => $pesan
		];

		\Mail::send('emails.pesan_pendaftaran', $data, function($message){
		    $message->from(env('EMAIL_PENGIRIM'), env('NAMA_PENGIRIM'));
		    $message->to($this->email_to, $this->nama_penerima)
		    		->subject($this->subject);
		 });
	}

}
