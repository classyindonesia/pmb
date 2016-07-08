<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createOrUpdatePertanyaanPolling;
use App\Http\Requests\createOrUpdatePilihanPolling;
use App\Models\Mst\PertanyaanPolling;
use App\Models\Mst\PilihanPolling;
use App\Repositories\Mst\PendaftaranRepository;
use Illuminate\Http\Request;

class PollingController extends Controller
{


    public $base_view = 'konten.backend.admin.polling.';

    public function __construct()
    {
        view()->share('polling_home', true);
        view()->share('base_view', $this->base_view);
    }


    //Start manage pertanyaan

    public function index()
    {
        $polling = PertanyaanPolling::paginate(10);
        return view($this->base_view.'index', compact('polling'));
    }

    public function create_pertanyaan()
    {
        return view($this->base_view.'popup.create');
    }

    public function insert_pertanyaan(createOrUpdatePertanyaanPolling $request)
    {
        $insert = PertanyaanPolling::create($request->all());
        return $insert;
    }


    public function edit_pertanyaan($mst_pertanyaan_polling_id)
    {
        $polling = PertanyaanPolling::findOrFail($mst_pertanyaan_polling_id);
        return view($this->base_view.'popup.edit', compact('polling'));
    }

    public function update_pertanyaan(createOrUpdatePertanyaanPolling $request)
    {
        $p = PertanyaanPolling::whereId($request->id)->update($request->except('_token'));
        return $p;
    }

    public function del_pertanyaan(Request $request)
    {
        $p = PertanyaanPolling::findOrFail($request->id);
        $p->delete();
        return 'ok';
    }

    //end of manage pertanyaan



    //start manage pilihan pertanyaan
    public function pilihan($mst_pertanyaan_polling_id)
    {
        $pilihan = PilihanPolling::whereMstPertanyaanPollingId($mst_pertanyaan_polling_id)->get();
        return view($this->base_view.'popup.list_pilihan', compact('pilihan'));
    }

    public function create_pilihan($mst_pertanyaan_polling_id)
    {
        return view($this->base_view.'popup.add_pilihan');
    }

    public function edit_pilihan($mst_pertanyaan_polling_id, $mst_pilihan_polling_id)
    {
        $pilihan = PilihanPolling::findOrFail($mst_pilihan_polling_id);
        return view($this->base_view.'popup.edit_pilihan', compact('pilihan'));
    }

    public function insert_pilihan(createOrUpdatePilihanPolling $request)
    {
        $data = [
            'mst_pertanyaan_polling_id'    => $request->mst_pertanyaan_polling_id,
            'pilihan'                    => $request->pilihan
        ];
        $insert = PilihanPolling::create($data);
        return $insert;
    }

    public function update_pilihan(createOrUpdatePilihanPolling $request)
    {
        $p = PilihanPolling::findOrFail($request->id);
        $p->mst_pertanyaan_polling_id    = $request->mst_pertanyaan_polling_id;
        $p->pilihan                    = $request->pilihan;
        $p->save();

        return $p;
    }

    public function del_pilihan(Request $request)
    {
        $p = PilihanPolling::findOrFail($request->id);
        $p->delete();
        return 'ok';
    }
    //End of manage pilihan pertanyaan




    public function view_hasil($mst_pertanyaan_polling_id, PendaftaranRepository $p)
    {
        $pertanyaan = PertanyaanPolling::findOrFail($mst_pertanyaan_polling_id);
        $jml_peserta = count($p->getAll());

        

        return view($this->base_view.'popup.hasil_polling', compact('pertanyaan', 'jml_peserta'));
    }
}
