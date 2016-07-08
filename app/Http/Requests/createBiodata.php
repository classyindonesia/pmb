<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class createBiodata extends Request
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
            'nama'                            => 'required',
            'alamat'                        => 'required',
            'mst_pendaftaran_id'            => 'required',
            'ref_agama_id'                    => 'required',
            'tempat_lahir'                    => 'required',
            'tgl_lahir'                        => 'required',
            'ref_kota_id'                    => 'required',
            'jenis_kelamin'                    => 'required',
            'ref_sma_id'                    => 'required',
            'tahun_lulus'                    => 'required',
            'no_ijazah'                        => 'required',
            'alamat_sekolah'                => 'required',
            'no_hp'                        => 'required',
            'ref_identitas_id'                => 'required',
            'no_identitas'                    => 'required|numeric',
            'ref_ukuran_almamater_id'        => 'required',
            'nama_ortu_ayah'                => 'required',
            'nama_ortu_ibu'                    => 'required',
            'ref_penghasilan_ortu_id_ayah'    => 'required',
            'ref_penghasilan_ortu_id_ibu'    => 'required',
            'ref_pekerjaan_ortu_id_ayah'    => 'required',
            'ref_pekerjaan_ortu_id_ibu'        => 'required',
            'ket_ortu_ayah'                    => 'required',
            'ket_ortu_ibu'                    => 'required',
            'alamat_ortu'                    => 'required',
            'ref_kota_id_ortu'                => 'required',
            'no_hp_ortu'                    => 'required',
            'jml_saudara'                    => 'required|numeric',
            'anak_ke'                        => 'required|numeric',
            'rt'                            => 'required|numeric',
            'rw'                            => 'required|numeric',
            'kode_pos'                        => 'required|numeric',
            'jenis_pendaftaran'                => 'required',
            'kewarganegaraan'                => 'required',
            'ref_tinggal_id'                => 'required',

            'tgl_lahir_ayah'                => 'required',
            'tgl_lahir_ibu'                    => 'required',
            'ref_pendidikan_id_ayah'        => 'required',
            'ref_pendidikan_id_ibu'            => 'required',

            'ref_transportasi_id'            => 'required',

        ];
    }
}
