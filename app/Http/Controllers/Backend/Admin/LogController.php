<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Log;
use Illuminate\Http\Request;

class LogController extends Controller {


	public $base_view = 'konten.backend.admin.log.';

	public function __construct(){
		view()->share('log_home', true);
		view()->share('base_view', $this->base_view);
	}


	public function index(){
		$log = Log::with('mst_user')->orderBy('id', 'DESC')->paginate(10);
		return view($this->base_view.'index', compact('log'));
	}


}
