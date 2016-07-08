<?php namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;

class SubmitPendaftaranOnline extends Request
{

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
            'nama'                => 'required',
            'alamat_email'        => 'required|email|unique:mst_pendaftaran',
            'no_hp'                => 'required|unique:mst_pendaftaran'
        ];
    }
}
