<?php namespace App\Http\Controllers\Frontend;

use App\Jobs\KirimEmailPendaftaran;
use App\Helpers\KirimSms;
use App\Helpers\SetupVariable;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Frontend\SubmitPendaftaranOnline;
use App\Models\Mst\Log;
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\PenggunaPin;
use App\Models\Mst\Pin;
use App\Models\Mst\User;
use App\Repositories\Mst\PinRepository;
use Illuminate\Http\Request;
use Queue;
use Auth;

class PendaftaranOnlineController extends Controller
{


    public function __construct()
    {
        view()->share('pendaftaran_online_home', true);
    }


    public function index(SetupVariable $sv)
    {
        if ($sv->get('show_pendaftaran_online_public') != 1) {
            abort(404);
        }
        return view('konten.frontend.pendaftaran_online.index', compact('sv'));
    }


    public function check_pin(PinRepository $pinrepo, Request $request, SetupVariable $sv)
    {
        $check_pin = $pinrepo->getWhereOne($request->pin);
        if (count($check_pin)<=0) {
            //PIN tidak ditemukan

                //create log
                $pesan = '<span class="text-danger">pin tidak ditemukan, IP : '.\Request::ip().', pin : '.$request->pin.' </span>';
            Log::create_log(0, $pesan);

            return 0;
        } else {
            $tgl_expired = $sv->get('masa_aktif_pin');
            $cek_expired = \Fungsi::selisih_hari(date('Y-m-d', strtotime($check_pin->updated_at)), date('Y-m-d'));
            if ($cek_expired <= $tgl_expired) {
                //success show pin

                //create log
                $pesan = '<span class="text-success">check pin, IP : '.\Request::ip().', pin : '.$request->pin.' </span>';
                Log::create_log(0, $pesan);

                $data = ['status' => $check_pin->status, 'pin' => $check_pin->pin];
                return json_encode($data);
            } else {
                //pin sudah expired

                //create log
                $pesan = '<span class="text-danger">pin sudah expired, IP : '.\Request::ip().', pin : '.$request->pin.' </span>';
                Log::create_log(0, $pesan);

                $data = ['status' => 2];
                return json_encode($data);
            }
        }
    }



    public function get_form_biodata(PinRepository $pinrepo, $pin, SetupVariable $sv)
    {
        $check_pin = $pinrepo->getWhereOne($pin);

        //cek tgl expired pin
        $tgl_expired = $sv->get('masa_aktif_pin');
        $cek_expired = \Fungsi::selisih_hari(date('Y-m-d', strtotime($check_pin->updated_at)), date('Y-m-d'));


        if (count($check_pin)<=0 || $cek_expired > $tgl_expired) {
            abort(404);
        } else {
            return view('konten.frontend.pendaftaran_online.form_biodata');
        }
    }

 


    private function handle_email($mst_pendaftaran, $password)
    {
        $subject = 'Pendaftaran Mahasiswa Baru | UNP Kediri';
        $email = $mst_pendaftaran->alamat_email;
        $nama = $mst_pendaftaran->nama;
        $user_id = 0;

        Queue::push(new KirimEmailPendaftaran($subject, $email, $nama, $user_id, $password));
        return 'ok';
    }

 
    private function handle_sms($mst_pendaftaran, $password)
    {
        $password = $password;
        $email = $mst_pendaftaran->alamat_email;
        $nama = $mst_pendaftaran->nama;
        $no_pendaftaran = $mst_pendaftaran->no_pendaftaran;
        $no_hp = $mst_pendaftaran->no_hp;

        $sms = new KirimSms;
        $sms->createUserNotif($email, $password, $nama, $no_pendaftaran, $no_hp);
        return 'ok';
    }



    private function create_user_camaba($mst_pendaftaran, $password)
    {
        $u = new User;
        $u->nama = $mst_pendaftaran->nama;
        $u->email = $mst_pendaftaran->alamat_email;
        $u->password = $password;
        $u->ref_user_level_id = 4;
        $u->save();

        return $u;
    }

    private function update_pin($no_pin)
    {
        $p = Pin::where('pin', '=', $no_pin)->first();
        $p->status = 1;
        $p->tgl_pakai = date('Y-m-d');
        $p->save();
        return $p;
    }


    private function insert_pengguna_pin($mst_pendaftaran_id, $pin)
    {
        $p = Pin::where('pin', '=', $pin)->first();
        $data = [
        'mst_pendaftaran_id' => $mst_pendaftaran_id,
        'mst_pin_id'        => $p->id
        ];
        $pp = PenggunaPin::create($data);
        return $pp;
    }


    public function submit_pendaftaran(SubmitPendaftaranOnline $request, Pin $pin, SetupVariable $sv)
    {

        //insert ke data pendaftaran utama
        $o = new Pendaftaran;
        $o->no_pendaftaran = $o->createNoPendaftaran();
        $o->nama = $request->nama;
        $o->alamat_email    = $request->alamat_email;
        $o->no_hp = $request->no_hp;
        $o->jenis_daftar = 1;
        $o->ref_gelombang_id = $sv->get('ref_gelombang_id');
        $o->ref_thn_ajaran_id = $sv->get('ref_thn_ajaran_id');
        $o->save();


        $password = '';
        for ($i=1;$i<=10;$i++) {
            $password = $password.rand(0, 9);
        }

        //create user
        $this->create_user_camaba($o, $password);

        //kirim sms
        $this->handle_sms($o, $password);

        //kirim email
        $this->handle_email($o, $password);


        // update pin
        $this->update_pin($request->pin);

        //insert to pengguna pin table
        $this->insert_pengguna_pin($o->id, $request->pin);




        return 'ok';
    }
}
