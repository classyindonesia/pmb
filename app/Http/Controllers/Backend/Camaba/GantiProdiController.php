<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\GantiProdi;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use Auth;
use Illuminate\Http\Request;

class GantiProdiController extends Controller
{


    private $base_view = 'konten.backend.camaba.kartu_pendaftaran.ganti_prodi.';

    public function __construct()
    {
        view()->share('base_view', $this->base_view);
    }

    public function index(PendaftaranRepository $p, Prodi $prodi)
    {
        $b = $p->getByEmail(Auth::user()->email);
        $prodi = Fungsi::get_dropdown($prodi->getAll());
        $request_ganti = GantiProdi::where('mst_pendaftaran_id', '=', $b->id)->with('ref_prodi')->get();
        return view($this->base_view.'popup.ganti_prodi', compact('b', 'prodi', 'request_ganti'));
    }

    public function submit_request(Request $request, PendaftaranRepository $p)
    {
        $b = $p->getByEmail($request->email);
        $check = GantiProdi::whereMstPendaftaranId($b->id)->whereProdiPilihan($request->prodi_pilihan)->whereStatus(0)->first();
        if (count($check)>0) { //jika sudah pernah request			
            return 1;
        } else {
            if ($request->prodi_pilihan == 1) {
                $prodi_awal = $b->ref_prodi_id1;
            } else {
                $prodi_awal = $b->ref_prodi_id2;
            }
            
            $data = [
            'mst_pendaftaran_id'    => $b->id,
            'ref_prodi_id'            => $request->ref_prodi_id,
            'prodi_pilihan'            => $request->prodi_pilihan,
            'ref_prodi_id_awal'        => $prodi_awal,
            'status'                => 0,
            ];
            GantiProdi::create($data);
            return 0;
        }
    }
}
