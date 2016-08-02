<?php


Route::group(['prefix' => 'backend'], function () {

    /* auth global */
    require base_path('routes/komponen/profile.php');



    /* admin */
    require base_path('routes/komponen/admin/dashboard.php');
    require base_path('routes/komponen/admin/users.php');
    require base_path('routes/komponen/admin/pin.php');
    require base_path('routes/komponen/admin/log.php');
    require base_path('routes/komponen/admin/polling.php');


    require base_path('routes/komponen/admin/ref.php');
    require base_path('routes/komponen/admin/config.php');
    require base_path('routes/komponen/admin/api_akses.php');
    //require base_path('routes/komponen/admin/api_v1.php');
    require base_path('routes/komponen/admin/api_call.php');
    require base_path('routes/komponen/admin/request_ganti_prodi.php');
    require base_path('routes/komponen/admin/data_upload.php');
    require base_path('routes/komponen/admin/pendaftaran.php');
      

    /* level web */
    require base_path('routes/komponen/web/weblink.php');
    require base_path('routes/komponen/web/foto_slide.php');
    require base_path('routes/komponen/web/berita.php');
    require base_path('routes/komponen/web/lampiran_berita.php');
    require base_path('routes/komponen/web/foto_slide_utama.php');
    require base_path('routes/komponen/web/menu.php');
    require base_path('routes/komponen/web/galery.php');




    /* level operator */
    require base_path('routes/komponen/operator/pendaftaran.php');
    require base_path('routes/komponen/operator/check_pin.php');



    /* level camaba */
    require base_path('routes/komponen/camaba/camaba.php');
    require base_path('routes/komponen/camaba/validasi_pendaftaran.php');
    require base_path('routes/komponen/camaba/kartu_pendaftaran.php');
    require base_path('routes/komponen/camaba/ganti_prodi.php');
    require base_path('routes/komponen/camaba/informasi.php');
    require base_path('routes/komponen/camaba/validasi_biodata.php');
    require base_path('routes/komponen/camaba/polling.php');


    /* level baa */
    require base_path('routes/komponen/baa/pendaftar.php');
    require base_path('routes/komponen/baa/tes_tulis.php');
    require base_path('routes/komponen/baa/tes_skill.php');
    require base_path('routes/komponen/baa/ref_ruang.php');
    require base_path('routes/komponen/baa/ref_tes_skill.php');
    require base_path('routes/komponen/baa/pengumuman.php');
    require base_path('routes/komponen/baa/ref_kota.php');
    require base_path('routes/komponen/baa/biodata.php');
    require base_path('routes/komponen/baa/ref_agama.php');
    require base_path('routes/komponen/baa/ref_identitas.php');
    require base_path('routes/komponen/baa/ref_status_daftar_ulang.php');
    require base_path('routes/komponen/baa/ref_ukuran_almamater.php');
    require base_path('routes/komponen/baa/ref_penghasilan_ortu.php');
    require base_path('routes/komponen/baa/ref_pekerjaan_ortu.php');
    require base_path('routes/komponen/baa/ref_perguruan_tinggi.php');
    require base_path('routes/komponen/baa/ref_tinggal.php');
    require base_path('routes/komponen/baa/ref_pendidikan.php');
    require base_path('routes/komponen/baa/ref_transportasi.php');
    require base_path('routes/komponen/baa/ref_prodi_pt.php');


});


require base_path('routes/komponen/public/sitemap.php');
require base_path('routes/komponen/public/feed.php');
require base_path('routes/komponen/auth.php');
require base_path('routes/komponen/password.php');

/* public */
require base_path('routes/komponen/public/daftar_file.php');
require base_path('routes/komponen/public/pendaftaran_online.php');
require base_path('routes/komponen/public/home.php');