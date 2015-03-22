<?php
	
require app_path('Http/routes/auth.php');
require app_path('Http/routes/password.php');

/* public */
require app_path('Http/routes/public/home.php');
require app_path('Http/routes/public/pendaftaran_online.php');



/* admin */
require app_path('Http/routes/admin/dashboard.php');
require app_path('Http/routes/admin/users.php');
require app_path('Http/routes/admin/pin.php');


require app_path('Http/routes/admin/ref.php');
require app_path('Http/routes/admin/config.php');
require app_path('Http/routes/admin/api_akses.php');
require app_path('Http/routes/admin/api_v1.php');
require app_path('Http/routes/admin/api_call.php');
 


/* level operator */
require app_path('Http/routes/operator/pendaftaran.php');



/* level camaba */
require app_path('Http/routes/camaba/camaba.php');
require app_path('Http/routes/camaba/validasi_pendaftaran.php');
require app_path('Http/routes/camaba/kartu_pendaftaran.php');

