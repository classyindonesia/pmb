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
        // $this->command->info('config login halaman depan telah ditambahkan!');

        $v = mSV::whereVariable('config_password_frontend')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_password_frontend', 'value' => 1]);
        // $this->command->info('config lupa password halaman depan telah ditambahkan!');

        $v = mSV::whereVariable('config_pendaftaran_online')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_pendaftaran_online', 'value' => 1]);
        // $this->command->info('config pendaftaran online halaman depan telah ditambahkan!');

        $v = mSV::whereVariable('config_pendaftaran_offline_operator')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_pendaftaran_offline_operator', 'value' => 1]);
        // $this->command->info('config pendaftaran offline operator telah ditambahkan!');



        $v = mSV::whereVariable('config_pindah_prodi')->first();
        if(count($v)<=0) mSV::create(['variable' => 'config_pindah_prodi', 'value' => 1]);
        // $this->command->info('config pindah prodi level camaba telah ditambahkan!');


        //int
        $v = mSV::whereVariable('masa_aktif_pin')->first(); 
        if(count($v)<=0) mSV::create(['variable' => 'masa_aktif_pin', 'value' => 1]);
        // $this->command->info('config masa aktif pin telah ditambahkan!');




        //int
        $v = mSV::whereVariable('show_pendaftaran_online_public')->first(); 
        if(count($v)<=0) mSV::create(['variable' => 'show_pendaftaran_online_public', 'value' => 1]);
        // $this->command->info('config show_pendaftaran_online_public telah ditambahkan!');

        //int
        $v = mSV::whereVariable('show_slide_utama_public')->first(); 
        if(count($v)<=0) mSV::create(['variable' => 'show_slide_utama_public', 'value' => 1]);
        // $this->command->info('config show_slide_utama_public telah ditambahkan!');


        //int
        $v = mSV::whereVariable('show_slide_public')->first(); 
        if(count($v)<=0) mSV::create(['variable' => 'show_slide_public', 'value' => 1]);
        // $this->command->info('config show_slide_public telah ditambahkan!');


        //int
        $v = mSV::whereVariable('show_list_file_public')->first(); 
        if(count($v)<=0) mSV::create(['variable' => 'show_list_file_public', 'value' => 1]);
        // $this->command->info('config show_list_file_public telah ditambahkan!');


        //hide/show menu polling
        $v = mSV::whereVariable('show_menu_polling_camaba')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_menu_polling_camaba', 'value' => 1]);
            // $this->command->info('config show_menu_polling_camaba telah ditambahkan!');
        }



        //hide/show menu validasi biodata lvl camaba
        $v = mSV::whereVariable('show_menu_validasi_biodata_camaba')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_menu_validasi_biodata_camaba', 'value' => 1]);
            // $this->command->info('config show_menu_validasi_biodata_camaba telah ditambahkan!');
        }



        //kirim/tidak sms saat melakukan validasi biodata
        $v = mSV::whereVariable('sms_validasi_biodata_camaba')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'sms_validasi_biodata_camaba', 'value' => 1]);
            // $this->command->info('config sms_validasi_biodata_camaba telah ditambahkan!');
        }

        // show/hide menu tambahan frontend
        $v = mSV::whereVariable('show_menu_tambahan_frontend')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_menu_tambahan_frontend', 'value' => 1]);
            // $this->command->info('config show_menu_tambahan_frontend telah ditambahkan!');
        }


        // generate npm saat validasi camaba
        $v = mSV::whereVariable('generate_npm_validasi')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'generate_npm_validasi', 'value' => 1]);
        }

        //hide/show menu validasi pendaftaran lvl camaba
        $v = mSV::whereVariable('show_menu_validasi_pendaftaran_camaba')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_menu_validasi_pendaftaran_camaba', 'value' => 1]);
        }

        //hide/show menu kartu pendaftaran lvl camaba
        $v = mSV::whereVariable('show_menu_kartu_pendaftaran_camaba')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_menu_kartu_pendaftaran_camaba', 'value' => 1]);
        }        

        //hide/show menu validasi pendaftaran lvl camaba
        $v = mSV::whereVariable('show_menu_informasi_camaba')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_menu_informasi_camaba', 'value' => 1]);
        }

        //hide/show menu validasi pendaftaran lvl camaba
        $v = mSV::whereVariable('show_statistik_frontend')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_statistik_frontend', 'value' => 1]);
        }

        //hide/show menu gallery frontend
        $v = mSV::whereVariable('show_gallery_frontend')->first(); 
        if(count($v)<=0){
            mSV::create(['variable' => 'show_gallery_frontend', 'value' => 1]);
        }        


    }

    

}