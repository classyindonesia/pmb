<?php namespace App\Http\Controllers\Backend\ApiV1;

/* requests */
use Illuminate\Http\Request;
use App\Helpers\ApiAuth;
use App\Models\Mst\Pin;
use App\Models\Ref\Gelombang;
/* helpers */
use App\Helpers\SetupVariable;

trait getRandomPin
{

    private $nama_api = 'v1/get_random_pin/{api_key}';


    public function get_random_pin($api_key, ApiAuth $api_auth, SetupVariable $sv, Request $request)
    {
        $check_api_key = $api_auth->check_api_key($api_key);
        if (count($check_api_key)>0) {
            //check apakah api key cocok 
            $pin = Pin::where('status', '=', 0)->orderBy(\DB::raw('RAND()'))->whereDiambil(0)->first();
            //check apakah pin masih tersedia
            if (count($pin)>0) { //jika masih ada

                /* update status pin, menjadi sudah diambil */
                $pin->diambil = 1;
                $pin->save();

                //query ke tabel ref_gelombang
                $gelombang = Gelombang::find($sv->get('ref_gelombang_id'));



                $data_response = [
                    'response_code' => 200,
                    'id'        => $pin->id,
                    'gelombang' => $gelombang->nama,
                    'biaya'        => $gelombang->biaya,
                    'pin'    => $pin->pin,
                ];




                $insert = $api_auth->create_api_call($request->ip(), response()->json($data_response, 200), $this->nama_api, $check_api_key->mst_user_id);
                return  response()->json($data_response, 200);
            } else {
                //jika sudah habis
                $data_response_out_of_pin = response()->json(['response_code' => '422', 'pesan' => 'nomor pin pendaftaran tidak tersedia!'], 422);
                $insert = $api_auth->create_api_call($request->ip(), $data_response_out_of_pin, $this->nama_api, $check_api_key->mst_user_id);
                return  $data_response_out_of_pin;
            }
        } else {
            //jika tdk cocok
            $data_response_wrong = $api_auth->response_wrong_key();
            $insert = $api_auth->create_api_call($request->ip(), $data_response_wrong, $this->nama_api, 0);
            return $data_response_wrong;
        }
    }






    public function check_status_pin($api_key, $id_pin, ApiAuth $api_auth, SetupVariable $sv, Request $request)
    {
        $check_api_key = $api_auth->check_api_key($api_key);
        if (count($check_api_key)>0) {
            //check apakah api key cocok 
            $pin =  Pin::find($id_pin);
            //check status pin
            if (count($pin)>0) { //jika ada
                if ($pin->diambil == 1) {
                    $status = "diambil";
                } else {
                    $status = 'belum diambil';
                }

                if ($pin->created_at == $pin->updated_at) {
                    $tgl_pengambilan = '-';
                } else {
                    $tgl_pengambilan = \Fungsi::date_to_tgl($pin->updated_at);
                }

                $data_response = [
                    'response_code'    => 200,
                    'id'                => $pin->id,
                    'pin'                => $pin->pin,
                    'status'            => $status,
                    'tgl_pengambilan'    => $tgl_pengambilan,
                ];
  
                return  response()->json($data_response, 200);
            } else {
                //jika sudah habis
                $data_response_out_of_pin = response()->json(['response_code' => '422', 'pesan' => 'ID pin pendaftaran tidak tersedia!'], 422);
                $insert = $api_auth->create_api_call($request->ip(), $data_response_out_of_pin, $this->nama_api, $check_api_key->mst_user_id);
                return  $data_response_out_of_pin;
            }
        } else {
            //jika tdk cocok
            $data_response_wrong = $api_auth->response_wrong_key();
            $insert = $api_auth->create_api_call($request->ip(), $data_response_wrong, $this->nama_api, 0);
            return $data_response_wrong;
        }
    }
}
