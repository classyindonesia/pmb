<?php
	
require app_path('Http/routes/auth.php');
require app_path('Http/routes/password.php');

/* public */
require app_path('Http/routes/public/home.php');
require app_path('Http/routes/public/daftar_file.php');
require app_path('Http/routes/public/pendaftaran_online.php');



/* auth global */
require app_path('Http/routes/profile.php');



/* admin */
require app_path('Http/routes/admin/dashboard.php');
require app_path('Http/routes/admin/users.php');
require app_path('Http/routes/admin/pin.php');
require app_path('Http/routes/admin/log.php');


require app_path('Http/routes/admin/ref.php');
require app_path('Http/routes/admin/config.php');
require app_path('Http/routes/admin/api_akses.php');
require app_path('Http/routes/admin/api_v1.php');
require app_path('Http/routes/admin/api_call.php');
require app_path('Http/routes/admin/request_ganti_prodi.php');
require app_path('Http/routes/admin/data_upload.php');
require app_path('Http/routes/admin/pendaftaran.php');
  

/* level web */
require app_path('Http/routes/web/weblink.php');
require app_path('Http/routes/web/foto_slide.php');
require app_path('Http/routes/web/berita.php');
require app_path('Http/routes/web/lampiran_berita.php');
require app_path('Http/routes/web/foto_slide_utama.php');




/* level operator */
require app_path('Http/routes/operator/pendaftaran.php');
require app_path('Http/routes/operator/check_pin.php');



/* level camaba */
require app_path('Http/routes/camaba/camaba.php');
require app_path('Http/routes/camaba/validasi_pendaftaran.php');
require app_path('Http/routes/camaba/kartu_pendaftaran.php');
require app_path('Http/routes/camaba/ganti_prodi.php');
require app_path('Http/routes/camaba/informasi.php');
require app_path('Http/routes/camaba/validasi_biodata.php');


/* level baa */
require app_path('Http/routes/baa/pendaftar.php');
require app_path('Http/routes/baa/tes_tulis.php');
require app_path('Http/routes/baa/tes_skill.php');
require app_path('Http/routes/baa/ref_ruang.php');
require app_path('Http/routes/baa/ref_tes_skill.php');
require app_path('Http/routes/baa/pengumuman.php');
require app_path('Http/routes/baa/ref_kota.php');
require app_path('Http/routes/baa/biodata.php');
require app_path('Http/routes/baa/ref_agama.php');
require app_path('Http/routes/baa/ref_identitas.php');
require app_path('Http/routes/baa/ref_status_daftar_ulang.php');
require app_path('Http/routes/baa/ref_ukuran_almamater.php');
require app_path('Http/routes/baa/ref_penghasilan_ortu.php');
require app_path('Http/routes/baa/ref_pekerjaan_ortu.php');
