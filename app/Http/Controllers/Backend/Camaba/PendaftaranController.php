<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Controllers\Controller;

/* requests */
use Illuminate\Http\Request;

  
/* traits */
use App\Http\Controllers\Backend\Camaba\Step\BiodataTrait; //step1
use App\Http\Controllers\Backend\Camaba\Step\ProdiTrait; //step2
use App\Http\Controllers\Backend\Camaba\Step\UploadFotoTrait; //step3
use App\Http\Controllers\Backend\Camaba\Step\UploadBerkasTrait; //step3


class PendaftaranController extends Controller {


	use BiodataTrait;  //step1
	use ProdiTrait; //step2
	use UploadFotoTrait; //step 3
	use UploadBerkasTrait;
	 



}
