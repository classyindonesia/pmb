<?php namespace App\Helpers;

use App\Models\Sms;

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

		$s = new Sms;
		$s->kode_pendaftaran = $no_pendaftaran;
		$s->no_hp = $no_hp;
		$s->pesan = $pesan;
		$s->statusKirim = 0;
		$s->save();

		return 'ok';
	}


	public function createUserNotifValidasi($no_pendaftaran, $nama, $no_hp){
		$pesan = 'Pendaftaran Online PMB UNP Kediri oleh '.$nama.', 
		telah berhasil melakukan validasi, nomor pendaftaran anda adalah : '.$no_pendaftaran;	

		$s = new Sms;
		$s->kode_pendaftaran = $no_pendaftaran;
		$s->no_hp = $no_hp;
		$s->pesan = $pesan;
		$s->statusKirim = 0;
		$s->save();

		return 'ok';
					
	}


}