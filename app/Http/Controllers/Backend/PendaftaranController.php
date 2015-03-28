<?php namespace App\Http\Controllers\Backend;

use App\Commands\KirimEmailPendaftaran;
use App\Commands\KirimSms as KS;
use App\Helpers\KirimSms;
use App\Helpers\SetupVariable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePendaftaranOnline;
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\User;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Gelombang;
use App\Repositories\Ref\Prodi;
use App\Repositories\Ref\Sma;
use Illuminate\Http\Request;
use Queue, Auth;

class PendaftaranController extends Controller {

	private $base_view = 'konten.backend.pendaftaran.pendaftaran_camaba.';

	public function __construct(){
		view()->share('base_view', $this->base_view);
 	}


	public function index(Prodi $prodi, Gelombang $gelombang, Sma $sma){
		$prodi = $prodi->getAll();
		$sma = $sma->getAll();
		$gelombang = $gelombang->getAll();
		$pendaftaran_home = true;
		return view('konten.backend.pendaftaran.index', compact('prodi', 'gelombang', 'sma', 'pendaftaran_home'));
	}


	public function handle_email($mst_pendaftaran, $password){

		$subject = 'Pendaftaran Mahasiswa Baru | UNP Kediri';
		$email = $mst_pendaftaran->alamat_email;
		$nama = $mst_pendaftaran->nama;
		$user_id = Auth::user()->id;

	 	Queue::push(new KirimEmailPendaftaran($subject, $email, $nama, $user_id, $password) );
	 	return 'ok';

	}

 
	public function handle_sms($mst_pendaftaran, $password){

		$password = $password;
		$email = $mst_pendaftaran->alamat_email;
		$nama = $mst_pendaftaran->nama;
		$no_pendaftaran = $mst_pendaftaran->no_pendaftaran;
		$no_hp = $mst_pendaftaran->no_hp;

		$sms = new KirimSms;
		$sms->createUserNotif($email, $password, $nama, $no_pendaftaran, $no_hp);
		return 'ok';
	}



	 public function create_user_camaba($mst_pendaftaran, $password){
	 	$u = new User;
	 	$u->nama = $mst_pendaftaran->nama;
	 	$u->email = $mst_pendaftaran->alamat_email;
	 	$u->password = $password;
	 	$u->ref_user_level_id = 4;
	 	$u->save();

	 	return $u;
	}



	public function store(CreatePendaftaranOnline $request, SetupVariable $sv){

		$o = new Pendaftaran;

		$o->no_pendaftaran = $o->createNoPendaftaran($request->ref_prodi_id1);
		$o->nama = $request->nama;
		$o->tgl_lahir = $request->tgl_lahir;
		$o->tempat_lahir = $request->tempat_lahir;
		$o->alamat 	= $request->alamat;
		$o->alamat_email 	= $request->alamat_email;
		$o->ref_gelombang_id = $request->ref_gelombang_id;
		$o->ref_prodi_id1 = $request->ref_prodi_id1;
		$o->ref_prodi_id2 = $request->ref_prodi_id2;
		$o->ref_sma_id = $request->ref_sma_id;
		$o->jenis_daftar = 0; //offline
		$o->no_hp = $request->no_hp;
		$o->ref_thn_ajaran_id = $sv->get('ref_thn_ajaran_id');
		$o->save();

		$password = date('dmY',strtotime($o->tgl_lahir));

		//create user
		$this->create_user_camaba($o, $password);

	 	//kirim sms
	 	$this->handle_sms($o, $password);

	 	//kirim email
	 	$this->handle_email($o, $password);
 
		return 'ok';
	}


	public function pendaftaran_camaba(Request $request, PendaftaranRepository $p){
		if($request->get('search')){
			$pendaftaran = $p->getBySearch($request->search);
		}else{
			$pendaftaran = $p->getAll();
		}
		$list_pendaftaran_home = true;
		$pendaftaran_camaba_home = true;
		$route_search = 'admin_pendaftaran.pendaftaran_camaba';
		return view($this->base_view.'index', 
			compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_home', 'route_search'));
	}

	public function pendaftaran_camaba_online(Request $request, PendaftaranRepository $p){
		if($request->get('search')){
			$pendaftaran = $p->getBySearch($request->search, 1);
		}else{
			$pendaftaran = $p->getByJenisDaftar(1);
		}
		$list_pendaftaran_home = true;
		$pendaftaran_camaba_online_home = true;
		$route_search = 'admin_pendaftaran.pendaftaran_camaba_online';
		return view($this->base_view.'index', 
			compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_online_home', 'route_search'));		
	}

	public function pendaftaran_camaba_offline(Request $request, PendaftaranRepository $p){
		if($request->get('search')){
			$pendaftaran = $p->getBySearch($request->search, 0);
		}else{
			$pendaftaran = $p->getByJenisDaftar(0);
		}
		$list_pendaftaran_home = true;
		$pendaftaran_camaba_offline_home = true;
		$route_search = 'admin_pendaftaran.pendaftaran_camaba_offline';
		return view($this->base_view.'index', 
			compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_offline_home', 'route_search'));		
	}
	



	public function kirim_sms($id){
		$pendaftaran = Pendaftaran::findOrfail($id);
		return view($this->base_view.'popup.kirim_sms', compact('pendaftaran'));
	}

	public function do_kirim_sms(Request $request){
		Queue::push(new KS($request->pesan, $request->no_pendaftaran, $request->no_hp));
		return 'ok';
	}



}
