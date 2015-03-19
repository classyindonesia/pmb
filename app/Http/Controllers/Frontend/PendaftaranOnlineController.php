<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


/* models */
use App\Models\Mst\Pin;
use App\Models\Mst\User;
use App\Models\Mst\Pendaftaran;


/* request */
use App\Http\Requests\Frontend\SubmitPendaftaranOnline;

/* repositories */
use App\Repositories\Mst\PinRepository;



/* commands */
use App\Commands\KirimEmailPendaftaran;

/* facades */
use Queue, Auth;


/* helpers */
use App\Helpers\KirimSms;


class PendaftaranOnlineController extends Controller {


	public function __construct(){
		view()->share('pendaftaran_online_home', true);
	}


	public function index(){
		return view('konten.frontend.pendaftaran_online.index');
	}


	public function check_pin(PinRepository $pinrepo, Request $request){

		$check_pin = $pinrepo->getWhereOne($request->pin);
		if(count($check_pin)<=0){
			return 0;
		}else{
			$data = ['status' => $check_pin->status, 'pin' => $check_pin->pin];
			return json_encode($data);
		}
	}



	public function get_form_biodata(PinRepository $pinrepo, $pin){
		$check_pin = $pinrepo->getWhereOne($pin);
		if(count($check_pin)<=0){
			abort(404);
		}else{
			return view('konten.frontend.pendaftaran_online.form_biodata');			
		}
	}







	private function handle_email($mst_pendaftaran, $password){

		$subject = 'Pendaftaran Mahasiswa Baru | UNP Kediri';
		$email = $mst_pendaftaran->alamat_email;
		$nama = $mst_pendaftaran->nama;
		$user_id = 0;

	 	Queue::push(new KirimEmailPendaftaran($subject, $email, $nama, $user_id, $password) );
	 	return 'ok';

	}

 
	private function handle_sms($mst_pendaftaran, $password){

		$password = $password;
		$email = $mst_pendaftaran->alamat_email;
		$nama = $mst_pendaftaran->nama;
		$no_pendaftaran = $mst_pendaftaran->no_pendaftaran;
		$no_hp = $mst_pendaftaran->no_hp;

		$sms = new KirimSms;
		$sms->createUserNotif($email, $password, $nama, $no_pendaftaran, $no_hp);
		return 'ok';
	}



	 private function create_user_camaba($mst_pendaftaran, $password){
	 	$u = new User;
	 	$u->nama = $mst_pendaftaran->nama;
	 	$u->email = $mst_pendaftaran->alamat_email;
	 	$u->password = $password;
	 	$u->ref_user_level_id = 4;
	 	$u->save();

	 	return $u;
	}

	private function update_pin($no_pin){
	 	$p = Pin::where('pin', '=', $no_pin)->first();
	 	$p->status = 1;
	 	$p->tgl_pakai = date('Y-m-d');
	 	$p->save();	
	 	return $p;	
	}


	public function submit_pendaftaran(SubmitPendaftaranOnline $request, Pin $pin){

		//insert ke data pendaftaran utama
		$o = new Pendaftaran;
		$o->no_pendaftaran = $o->createNoPendaftaran();
		$o->nama = $request->nama;	
		$o->alamat_email 	= $request->alamat_email;
		$o->no_hp = $request->no_hp;
		$o->save();


		$password = '';
		for($i=1;$i<=10;$i++){
			$password = $password.rand(0,9);
		}

		//create user
		$this->create_user_camaba($o, $password);

	 	//kirim sms
	 	$this->handle_sms($o, $password);

	 	//kirim email
	 	$this->handle_email($o, $password);


	 	// update pin
	 	$this->update_pin($request->pin);




		return 'ok';
	}




}
