<?php namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\KirimSms;
use App\Models\Mst\Berkas;
use App\Models\Mst\GantiProdi;
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Photo;
use App\Models\Mst\User;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use App\Services\Pendaftaran\delPendaftaranService;
use App\Services\Pendaftaran\doImportPendaftaranService;
use App\Services\Pendaftaran\exportPendaftaranService;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
 


    private $base_view = 'konten.backend.admin.pendaftaran_camaba.';

    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('data_pendaftaran_home', true);
    }


    public function pendaftaran_camaba(Request $request, PendaftaranRepository $p)
    {
        if ($request->get('search')) {
            $pendaftaran = $p->getBySearch($request->search);
        } else {
            $pendaftaran = $p->getAll();
        }
        $list_pendaftaran_home = true;
        $pendaftaran_camaba_home = true;
        $route_search = 'admin_data_pendaftaran.pendaftaran_camaba';
        return view($this->base_view.'index',
            compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_home', 'route_search'));
    }

    public function pendaftaran_camaba_online(Request $request, PendaftaranRepository $p)
    {
        if ($request->get('search')) {
            $pendaftaran = $p->getBySearch($request->search, 1);
        } else {
            $pendaftaran = $p->getByJenisDaftar(1);
        }
        $list_pendaftaran_home = true;
        $pendaftaran_camaba_online_home = true;
        $route_search = 'admin_data_pendaftaran.pendaftaran_camaba_online';
        return view($this->base_view.'index',
            compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_online_home', 'route_search'));
    }

    public function pendaftaran_camaba_offline(Request $request, PendaftaranRepository $p)
    {
        if ($request->get('search')) {
            $pendaftaran = $p->getBySearch($request->search, 0);
        } else {
            $pendaftaran = $p->getByJenisDaftar(0);
        }
        $list_pendaftaran_home = true;
        $pendaftaran_camaba_offline_home = true;
        $route_search = 'admin_data_pendaftaran.pendaftaran_camaba_offline';
        return view($this->base_view.'index',
            compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_offline_home', 'route_search'));
    }
    



    public function kirim_sms($id)
    {
        $pendaftaran = Pendaftaran::findOrfail($id);
        return view($this->base_view.'popup.kirim_sms', compact('pendaftaran'));
    }

    public function do_kirim_sms(Request $request)
    {
        \Queue::push(new KirimSms($request->pesan, $request->no_pendaftaran, $request->no_hp));
        return 'ok';
    }



    public function view_biodata($id)
    {
        $biodata = Pendaftaran::findOrfail($id);
        return view($this->base_view.'popup.view_biodata', compact('biodata'));
    }


    public function view_berkas($id)
    {
        $biodata = Pendaftaran::findOrfail($id);
        return view($this->base_view.'popup.view_berkas', compact('biodata'));
    }


    public function request_pindah_prodi($id)
    {
        $b = Pendaftaran::findOrfail($id);
        $prodi = new Prodi;
        $prodi = \Fungsi::get_dropdown($prodi->getAll());
        $request_ganti = GantiProdi::where('mst_pendaftaran_id', '=', $b->id)
            ->with('ref_prodi')
            ->get();
        return view($this->base_view.'popup.request_pindah_prodi',
            compact('b', 'prodi', 'request_ganti'));
    }



    public function export_data(exportPendaftaranService $export)
    {
        return $export->handle();
    }


    public function delete(delPendaftaranService $delete)
    {

        return $delete->handle();
    }


    public function import_data_pendaftaran()
    {
        return view($this->base_view.'popup.import_data_pendaftaran');
    }

    public function do_import_data_pendaftaran(doImportPendaftaranService $import)
    {
        return $import->handle();
    }


}
