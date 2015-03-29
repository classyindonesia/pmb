<?php namespace App\Http\Controllers\Auth;

use App\Commands\KirimSms;
use App\Http\Controllers\Controller;
use App\Models\Mst\User;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ResetPasswordsController extends Controller {

	protected $auth;

	protected $passwords;
	protected $redirectTo = '/backend/';


	public function __construct(PasswordBroker $passwords, Guard $auth){
		$this->auth = $auth;
		$this->passwords = $passwords;
		view()->share('reset_password_home', true);
		$this->middleware('guest');
	}


	private function kirim_sms_reset_link($email, $token){
		$p = new PendaftaranRepository;
		$u = User::where('email', '=', $email)->first();
		if(count($u)>0){
		$pendaftaran = $p->getByEmail($email);
			if(count($pendaftaran)>0){
				$pesan = 'Click here to reset your password: '.url('password/reset/'.$token);
				$no_pendaftaran = $pendaftaran->no_pendaftaran;
				$no_hp = $pendaftaran->no_hp;
				\Queue::push(new KirimSms($pesan, $no_pendaftaran, $no_hp));
			}			
		}
	}
 

	/**
	 * Display the form to request a password reset link.
	 *
	 * @return Response
	 */
	public function getEmail()
	{
		return view('konten.frontend.auth.password');
	}

	/**
	 * Send a reset link to the given user.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function postEmail(Request $request)
	{
		
		$this->validate($request, ['email' => 'required']);

		$response = $this->passwords->sendResetLink($request->only('email'), function($m)
		{
			$m->subject($this->getEmailSubject());
		});

		switch ($response)
		{
			case PasswordBroker::RESET_LINK_SENT:
				$this->kirim_sms_reset_link($request->email, $request->_token);
				return redirect()->back()->with('status', trans($response));

			case PasswordBroker::INVALID_USER:
				return redirect()->back()->withErrors(['email' => trans($response)]);
		}
	}

	/**
	 * Get the e-mail subject line to be used for the reset link email.
	 *
	 * @return string
	 */
	protected function getEmailSubject()
	{
		return isset($this->subject) ? $this->subject : 'Your Password Reset Link';
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token))
		{
			throw new NotFoundHttpException;
		}

		return view('konten.frontend.auth.reset.form_reset')->with('token', $token);
	}

	/**
	 * Reset the given user's password.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function postReset(Request $request)
	{
		$this->validate($request, [
			'token' => 'required',
			'email' => 'required',
			'password' => 'required|confirmed',
		]);

		$credentials = $request->only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$response = $this->passwords->reset($credentials, function($user, $password)
		{
			$user->password = bcrypt($password);

			$user->save();

			$this->auth->login($user);
		});

		switch ($response)
		{
			case PasswordBroker::PASSWORD_RESET:
				return redirect($this->redirectPath());

			default:
				return redirect()->back()
							->withInput($request->only('email'))
							->withErrors(['email' => trans($response)]);
		}
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	public function redirectPath()
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
	}

}
