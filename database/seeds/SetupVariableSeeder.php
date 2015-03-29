<?php
use App\Models\Ref\Gelombang;
use App\Models\Ref\Prodi;
use App\Models\Ref\Sma;
use App\Models\Ref\ThnAjaran;
use App\Models\SetupVariable as mSV;
use Illuminate\Database\Seeder;

 
class SetupVariableSeeder extends Seeder {

    public function run(){

        $data = mSV::where('variable', 'navbar_bg_color')->first();
        $data_insert= ['variable' => 'navbar_bg_color', 'value' => 'A0B8A8', 'keterangan' => 'background color di navbar'];
        if(count($data)<=0) mSV::create($data_insert);



        $dt =ThnAjaran::find(1);
        if(count($dt)<=0) ThnAjaran::create(['id' => 1, 'nama' => '2015/2016']);
        $data = mSV::where('variable', 'ref_thn_ajaran_id')->first();
        $data_insert= ['variable' => 'ref_thn_ajaran_id', 'value' => 1, 'keterangan' => 'tahun ajaran yg skrg dipakai'];
        if(count($data)<=0) mSV::create($data_insert);

        $glb = Gelombang::find(1);
        if(count($glb)<=0) Gelombang::create(['id' => 1, 'nama' => 'gelombang 1', 'ref_thn_ajaran_id' => 1]);
        $data = mSV::where('variable', 'ref_gelombang_id')->first();
        $data_insert= ['variable' => 'ref_gelombang_id', 'value' => 1, 'keterangan' => 'gelombang utk pmb online skrg dipakai'];
        if(count($data)<=0) mSV::create($data_insert);



        /* insert to ref_sma*/
        $sma = Sma::find(1);
        if(count($sma)<=0)Sma::create(['id'=>1,'nama'=>'SMA NEGERI 1 KEDIRI']);

        /* insert to ref_prodi*/
        $prodi = Prodi::find(1);
        if(count($prodi)<=0)Prodi::create(['id'=>1,'kode_prodi' => '101', 'nama'=>'Prodi BK']);


        
        $v = mSV::whereVariable('config_login_frontend')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_login_frontend', 'value' => 1]); //1=show,0=hide
        $this->command->info('config login halaman depan telah ditambahkan!');

        $v = mSV::whereVariable('config_password_frontend')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_password_frontend', 'value' => 1]);
        $this->command->info('config lupa password halaman depan telah ditambahkan!');

        $v = mSV::whereVariable('config_pendaftaran_online')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_pendaftaran_online', 'value' => 1]);
        $this->command->info('config pendaftaran online halaman depan telah ditambahkan!');

        $v = mSV::whereVariable('config_pendaftaran_offline_operator')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_pendaftaran_offline_operator', 'value' => 1]);
        $this->command->info('config pendaftaran offline operator telah ditambahkan!');



        $v = mSV::whereVariable('config_pindah_prodi')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_pindah_prodi', 'value' => 1]);
        $this->command->info('config pindah prodi level camaba telah ditambahkan!');


    }

    

}