<?php
	
require app_path('Http/routes/auth.php');
require app_path('Http/routes/password.php');

/* public */
require app_path('Http/routes/public/home.php');



/* admin */
require app_path('Http/routes/admin/dashboard.php');
require app_path('Http/routes/admin/users.php');


require app_path('Http/routes/admin/ref.php');
 


