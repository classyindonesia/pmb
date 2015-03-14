<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUser extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nama'	=> 'required',
			'email'	=> 'required|email|unique:mst_users',
			'password'	=> 'required|min:6|confirmed',
			'ref_user_level_id'	=> 'required'
		];
	}

}
