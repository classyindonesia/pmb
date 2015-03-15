<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateApiAkses extends Request {

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
			'mst_user_id'	=> 'required|unique:mst_api_akses'
		];
	}

}
