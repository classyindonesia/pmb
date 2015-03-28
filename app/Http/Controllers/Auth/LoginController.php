<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

/* facade */
use Input, Auth, Hash;

/* models */
use App\Models\Mst\User;
class LoginController extends Controller {

	protected $redirectTo = 'home';

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}


	public function login(){
		
		return view('konten.frontend.auth.login_popup');
	}


	public function do_fb_login($facebook = 'facebook'){
	    // Get the provider instance
	    $provider = \Socialize::with($facebook);

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
	        	return redirect()->intended($this->redirectPath());
	        }else{
					return redirect($this->loginPath())
								->withErrors([
									'email' => 'User tidak ditemukan.',
								]);
	        }

	        //return dd($user);
	    } else {
	        return $provider->redirect();
	    }

	}



	public function do_login(Request $request){
		$this->validate($request, [
			'email' => 'required', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return redirect()->intended($this->redirectPath());
		}

		return redirect($this->loginPath())
					->withInput($request->only('email', 'remember'))
					->withErrors([
						'email' => 'These credentials do not match our records.',
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
		$this->auth->logout();

		return redirect('/');
	}


}
