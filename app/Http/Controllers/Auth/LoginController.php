<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Mst\Log;
use App\Models\Mst\User;
use Illuminate\Http\Request;
use Input, Auth, Hash;
class LoginController extends Controller {

	protected $redirectTo = 'backend';

 


	public function login(){
		
		return view('konten.frontend.auth.login_popup');
	}


	public function do_fb_login($facebook = 'facebook'){
	    // Get the provider instance
	    $provider = \Socialite::with($facebook);

	    // Check, if the user authorised previously.
	    // If so, get the User instance with all data,
	    // else redirect to the provider auth screen.
	    if (\Input::has('code'))
	    {
	        $user = $provider->user();

	        $check_email = User::where('email', '=', $user->email)->first();
	        if(count($check_email)>0){
	        	//jika email ada di db, forced to login
	        	Auth::loginUsingId($check_email->id);
	        	
	        	//create log
	        	$user_id = $check_email->id;
	        	$pesan = '<span class="text-success">berhasil login via facebook dari IP : '.\Request::ip().', email : '.$check_email->email.'</span>';
	        	Log::create_log($user_id, $pesan);


	        	return redirect()->intended($this->redirectPath());
	        }else{

	        	//create log
	        	$user_id = 0;
	        	$pesan = '<span class="text-danger">gagal login via facebook dari IP : '.\Request::ip().'</span>';
	        	Log::create_log($user_id, $pesan);


					return redirect($this->loginPath())
								->withErrors([
									'email' => 'User tidak ditemukan.',
								]);
	        }
	    } else {
	        return $provider->redirect();
	    }

	}



	public function do_login(Request $request){
		$this->validate($request, [
			'email' => 'required', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if (Auth::attempt($credentials, $request->has('remember')))
		{

	        	//create log
	        	$user_id = \Auth::user()->id;
	        	$pesan = '<span class="text-success">berhasil login dari IP : '.\Request::ip().', email : '.\Auth::user()->email.'</span>';
	        	Log::create_log($user_id, $pesan);

			return redirect()->intended($this->redirectPath());
		}



	        	//create log
	        	$user_id = 0;
	        	$pesan = '<span class="text-danger">gagal login dari IP : '.\Request::ip().', email : '.$request->get('email').'</span>';
	        	Log::create_log($user_id, $pesan);


		return redirect($this->loginPath())
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => 'data tdk ditemukan',
					]);

	}


	public function redirectPath()
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
	}



	public function loginPath(){
		return property_exists($this, 'loginPath') ? $this->loginPath : '/';
	}




	public function getLogout()
	{
		Auth::logout();

		return redirect('/');
	}


}
