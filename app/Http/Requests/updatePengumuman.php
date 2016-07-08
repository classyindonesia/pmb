<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class updatePengumuman extends Request
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
            'no_pendaftaran'                => 'required|exists:mst_pendaftaran,no_pendaftaran',
            'ref_prodi_id'                    => 'required|exists:ref_prodi,id',
            'ref_status_daftar_ulang_id'    => 'required'
        ];
    }
}
