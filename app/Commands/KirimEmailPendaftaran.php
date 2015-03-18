<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;


/* facade */
use Mail, Auth;


class KirimEmailPendaftaran extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	public $email_to;
	public $subject;
	public $nama_penerima;
 	public $user_id;
 	public $password;


	public function __construct($subject, $email_to, $nama_penerima, $user_id, $password){
		$this->nama_penerima = $nama_penerima;
		$this->password = $password;
		$this->subject = $subject;
		$this->email_to = $email_to;
		$this->user_id = $user_id;
 	}






	public function handle(){

		$pesan = 'Pendaftaran Online PMB UNP Kediri oleh '.$this->nama_penerima.', Berhasil, Silahkan login ke website 
		http://pmb.unpkediri.ac.id, dgn username : '.$this->email_to.', password : '.$this->password.', 
		untuk melengkapi persyaratan selanjutnya.';

	    //data untuk ditaruh di view
		$data = [
			'konten' => $pesan
		];


		Mail::send('emails.pesan_pendaftaran', $data, function($message){
		    $message->from(env('EMAIL_PENGIRIM'), env('NAMA_PENGIRIM'));
		    $message->to($this->email_to, $this->nama_penerima)
		    		->subject($this->subject);
		 });
	}




}
