<?php namespace App\Helpers;

use App\Commands\KirimSms as KS;
use Queue;


class KirimSms{

	/*  ISI PESAN SMS :
		Pendaftaran ONLINE PMB UNP Kediri oleh [NAMA], 
		Berhasil, Silahkan login ke website http://pmb.unpkediri.ac.id , 
		dng username : xx, password : xx, 
		untuk melengkapi persyaratan selanjutnya
	*/
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


}