<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class createTesSkill extends Request {

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
			'no_pendaftaran'	=> 'required|exists:mst_pendaftaran,no_pendaftaran',
			'kode_ruang'		=> 'required|exists:ref_ruang,kode_ruang',
			'ref_tes_skill_id'	=> 'required|exists:ref_tes_skill,id'			
		];
	}

}
