<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePendaftaranOnline extends Request {

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
			'alamat_email'		=> 'required|email|unique:mst_pendaftaran'
			'ref_prodi_id1' 	=> 'required',
			'ref_prodi_id2' 	=> 'required',
			'alamat'			=> 'required',
			'tempat_lahir' 		=> 'required',
			'tgl_lahir' 		=> 'required',
			'no_ijazah' 		=> 'required',
			'no_hp'				=> 'required|numeric',
			'thn_lulus' 		=> 'required',
			'ref_gelombang_id' 	=> 'required',
		];
	}

}
