<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\JawabanPolling;
use App\Models\Mst\PertanyaanPolling;
use Illuminate\Http\Request;

class PollingController extends Controller
{


    public $base_view = 'konten.backend.camaba.polling.';


    public function __construct()
    {
        view()->share('polling_home', true);
        view()->share('base_view', $this->base_view);
    }

    public function index()
    {
        $polling = PertanyaanPolling::with('mst_pilihan_polling')->whereAktif(1)->get();


        return view($this->base_view.'index', compact('polling'));
    }


    public function submit_jawaban(Request $request)
    {
        $check_polling_session = JawabanPolling::whereMstPertanyaanPollingId($request->mst_pertanyaan_polling_id)
                                ->whereMstUserId($request->mst_user_id)
                                ->get();
        if (count($check_polling_session)>0) {
            //jika sudah pernah polling
            foreach ($check_polling_session as $list) {
                $list->delete();
            }
            $data = [
                'mst_pertanyaan_polling_id'    => $request->mst_pertanyaan_polling_id,
                'mst_pilihan_polling_id'    => $request->mst_pilihan_polling_id,
                'mst_user_id'                => $request->mst_user_id
            ];
            JawabanPolling::create($data);
            return 'ada';
        } else {
            //jika blm pernah polling
            $data = [
                'mst_pertanyaan_polling_id'    => $request->mst_pertanyaan_polling_id,
                'mst_pilihan_polling_id'    => $request->mst_pilihan_polling_id,
                'mst_user_id'                => $request->mst_user_id
            ];
            JawabanPolling::create($data);
            return 'tdk ada';
        }
    }
}
