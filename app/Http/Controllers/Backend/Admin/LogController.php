<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LogController extends Controller {


	public $base_content = 'konten.backend.admin.log.';

	public function __construct(){
		view()->share('log_home', true);
		view()->share('base_content', $this->base_content);
	}


	public function index(){
		return view($this->base_content.'index');
	}
	

}
