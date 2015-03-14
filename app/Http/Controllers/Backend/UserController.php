<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/* models */
use App\Models\Mst\User;
use App\Models\Ref\UserLevel;


/* requests */
use App\Http\Requests\CreateUser;
use App\Http\Requests\UpdateUser;

class UserController extends Controller{

	public function __construct(){
		view()->share('users_home', true);
	}

	public function index(){
		$users = User::with('ref_user_level')->paginate(10);
		return view('konten.backend.users.index', compact('users'));
	}


	public function add(){
		$level = UserLevel::all();
		return view('konten.backend.users.popup.add', compact('level'));
	}

	public function insert(CreateUser $request){
		$data = [
		'nama'	=> $request->nama,
		'password' => $request->password,
		'email'		=> $request->email,
		'ref_user_level_id'	=> $request->ref_user_level_id
		];
		User::create($data);
		return 'ok';		
	}


	public function del(){
		$o = User::find(\Input::get('id'));
		$o->delete();
		return 'ok';
	}

	public function edit($id){
		$user = User::findOrFail($id);
		$level = UserLevel::all();
		return view('konten.backend.users.popup.edit', compact('user', 'level'));
	}

	public function update(UpdateUser $request){
		$o = User::find($request->id);
		$o->nama = $request->nama;
		$o->email = $request->email;
		$o->ref_user_level_id = $request->ref_user_level_id;
		$o->save();

		return 'ok';		
	}



}