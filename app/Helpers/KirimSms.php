<?php namespace App\Helpers;

use App\Commands\KirimSms as KS;
use Queue;


class KirimSms{

 
	public function createUserNotif($email, $password, $nama, $no_pendaftaran, $no_hp){
		$pesan = 'Pendaftaran Online PMB UNP Kediri oleh '.$nama.', Berhasil, Silahkan login ke website 
		http://pmb.unpkediri.ac.id, dgn username : '.$email.', password : '.$password.', 
		untuk melengkapi persyaratan selanjutnya.';


		Queue::push(new KS($pesan, $no_pendaftaran, $no_hp));

		return 'ok';
	}


	public function createUserNotifValidasi($no_pendaftaran, $nama, $no_hp){
		$pesan = 'Pendaftaran Online PMB UNP Kediri oleh '.$nama.', 
		telah berhasil melakukan validasi, nomor pendaftaran anda adalah : '.$no_pendaftaran;	

		Queue::push(new KS($pesan, $no_pendaftaran, $no_hp));
 
		return 'ok';
					
	}

	public function createUserNotifPindahProdi($no_pendaftaran, $nama, $no_hp, $prodi_awal, $prodi_pindah){
 		$pesan = $no_pendaftaran.', '.$nama.', Pindah Prodi dari '.$prodi_awal.' menjadi '.$prodi_pindah.', telah berhasil dilakukan. PMB Online UNP Kediri';
 		Queue::push(new KS($pesan, $no_pendaftaran, $no_hp));
 		return 'ok';
	}

 

}