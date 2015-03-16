<?php namespace App\Http\Controllers\Backend;

use App\Http\Requests\GeneratePin;
use App\Http\Requests\CreatePin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Mst\Pin;

class PinController extends Controller {

	public function __construct(){
		view()->share('pin_home', true);
	}


	/* view list all status pin[terpakai/belum] */
	public function index(){
		if(\Session::has('pencarian_pin')){
			$pin = Pin::orderBy('id', 'DESC')->where('pin', 'like', '%'.\Session::get('pencarian_pin').'%')->paginate(10);			
		}else{
			$pin = Pin::orderBy('id', 'DESC')->paginate(10);			
		}
		$list_api_home = true;
		return view('konten.backend.pin.index', compact('pin', 'list_api_home'));
	}



	public function submit_search(Request $request){
		if($request->has('submit')){
			\Session::put('pencarian_pin', $request->pencarian_pin);
		}else{
			\Session::forget('pencarian_pin');
		}
		return redirect()->route('admin_pin.index');
	}


	public function generate(){
		return view('konten.backend.pin.popup.generate');
	}

	public function create(){		
		return view('konten.backend.pin.popup.create');
	}

	public function store(CreatePin $request){
		$o = new Pin;
		$o->pin = $request->pin;
		$o->save();
		return 'ok';		
	}	



	public function do_generate(GeneratePin $request){
		$jml_pin = $request->jml_pin;

		for($i=1;$i<=$jml_pin;$i++){

			$p = new Pin;
			$p->pin = Pin::keygen();
			$p->save();
		}

		return 'ok';

	}



	public function statistik(){
		$jml_terpakai = Pin::whereStatus(1)->count();
		$jml_belum_dipakai = Pin::whereStatus(0)->count();
		$jml_semua = Pin::count();
		$api_statistik = true;
		return view('konten.backend.pin.statistik', compact('jml_terpakai', 'jml_semua', 'jml_belum_dipakai', 'api_statistik'));
	}



	public function destroy(Request $request){
		$o = Pin::findOrFail($request->id);
		$o->delete();
		return 'ok';
	}





}
