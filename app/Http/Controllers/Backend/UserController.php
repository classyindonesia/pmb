<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUser;
use App\Http\Requests\UpdateUser;
use App\Models\Mst\User;
use App\Models\Ref\UserLevel;
use App\Repositories\Mst\UserRepository;
use Illuminate\Http\Request;
use Input;

class UserController extends Controller
{

    public function __construct()
    {
        view()->share('users_home', true);
    }

    public function index(Request $request, UserRepository $u)
    {
        $users = $u->get_all_user($request);
        $level = $request->get('level');
        if (isset($level) && $level == '') {
            return redirect()->to('backend/users/?search='.$request->get('search'));
        }
        $level_pencarian = [
            ''        => 'all',
            '1'    => 'admin',
            '2'    => 'web',
            '3'        => 'Operator',
            '4'    => 'camaba',
            '5'        => 'Api Akses',
            '6'        => 'BAA'
        ];
        return view('konten.backend.users.index', compact('users', 'level_pencarian'));
    }


    public function add()
    {
        $level = UserLevel::all();
        return view('konten.backend.users.popup.add', compact('level'));
    }

    public function insert(CreateUser $request)
    {
        $data = [
        'nama'    => $request->nama,
        'password' => $request->password,
        'email'        => $request->email,
        'ref_user_level_id'    => $request->ref_user_level_id
        ];
        User::create($data);
        return 'ok';
    }


    public function del()
    {
        $o = User::find(\Input::get('id'));
        $o->delete();
        return 'ok';
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $level = UserLevel::all();
        return view('konten.backend.users.popup.edit', compact('user', 'level'));
    }

    public function update(UpdateUser $request)
    {
        $o = User::find($request->id);
        $o->nama = $request->nama;
        $o->email = $request->email;
        $o->ref_user_level_id = $request->ref_user_level_id;
        $o->save();

        return 'ok';
    }


    /* reset password agar password sama dgn email */
    public function reset_password()
    {
        $user = User::find(Input::get('id'));
        if (count($user)>0) {
            $user->password = $user->email;
            $user->save();
        }
        return 'ok';
    }
}
