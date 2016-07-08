<?php namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\UpdatePassword;
use App\Models\Mst\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    private $base_view = 'konten.backend.profile.';

    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('profile_home', true);
    }


    public function index()
    {
        return view($this->base_view.'index');
    }


    public function update_password(UpdatePassword $request)
    {
        $old_password = \Auth::user()->password;
        if (\Hash::check($request->password_lama, $old_password)) {
            // The passwords match...
                $u = User::find(\Auth::user()->id);
            $u->password = $request->password_baru;
            $u->save();
            return 'ok';
        } else {
            $response = ['error' => 'password salah! '];
            return response()->json($response, 422);
        }
    }
}
