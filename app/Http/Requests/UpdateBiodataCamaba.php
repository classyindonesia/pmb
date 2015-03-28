<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateBiodataCamaba extends Request {

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
			'nama' 				=> 'required',
			'ref_sma_id' 		=> 'required',
  			'alamat'			=> 'required',
			'tempat_lahir' 		=> 'required',
			'tgl_lahir' 		=> 'required',
			//'no_ijazah' 		=> 'required',
			'no_hp'				=> 'required|numeric',
			//'thn_lulus' 		=> 'required',
		];
	}

}
