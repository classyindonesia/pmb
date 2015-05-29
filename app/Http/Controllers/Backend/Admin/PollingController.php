<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class PollingController extends Controller {


	public $base_view = 'konten.backend.admin.polling.';

	public function __construct(){
		view()->share('polling_home', true);
		view()->share('base_view', $this->base_view);
	}


	public function index(){

		return view($this->base_view.'index');
	}


}
