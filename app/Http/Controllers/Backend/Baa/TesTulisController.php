<?php namespace App\Http\Controllers\Backend\Baa;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\createTesTulis;
use App\Http\Requests\updateTesTulis;
use App\Jobs\InsertTesTulis;
use App\Models\Mst\TesTulis;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Mst\TesTulisRepository;
use App\Repositories\Ref\RuangRepository;
use Illuminate\Http\Request;

class TesTulisController extends Controller
{

    private $base_view = 'konten.backend.baa.tes_tulis.';

    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('tes_tulis_home', true);
    }

    public function index(TesTulisRepository $ttr, Request $request)
    {
        $tt_home = true;
        $cari = $request->get('search');
        if ($cari) {
            $tt = $ttr->getAllPencarian($cari);
        } else {
            $tt = $ttr->getAll();
        }
        return view($this->base_view.'index', compact('tt', 'tt_home'));
    }


    public function create(RuangRepository $r)
    {
        $kode_ruang = $r->getDropDown();
        return view($this->base_view.'popup.create', compact('kode_ruang'));
    }



    public function insert(createTesTulis $request, PendaftaranRepository $p, RuangRepository $r)
    {
        $pendaftar = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
        $ruang = $r->getByKodeRuang($request->kode_ruang);
        $pendaftar_ruang = TesTulis::whereMstPendaftaranId($pendaftar->id)->whereRefRuangId($ruang->id)->first();
        if (count($pendaftar_ruang)<=0) {
            $data = [
                'mst_pendaftaran_id'    => $pendaftar->id,
                'ref_ruang_id'            => $ruang->id
            ];
            TesTulis::create($data);
            return 'ok';
        } else {
            $response = response()->json(['error' => 'nomor pendaftaran sudah ada pada ruangan tsb!'], 422);
            return $response;
        }
    }

    public function delete()
    {
        $t = TesTulis::findOrFail(\Input::get('id'));
        if (count($t)>0) {
            $t->delete();
        }
        return 'ok';
    }


    public function edit($id, RuangRepository $r)
    {
        $tt = TesTulis::findOrFail($id);
        $kode_ruang = $r->getDropDown();
        return view($this->base_view.'popup.edit', compact('tt', 'kode_ruang'));
    }

    public function update(updateTesTulis $request, PendaftaranRepository $p, RuangRepository $r)
    {
        $tt = TesTulis::findOrFail($request->id);
        $p_get = $p->getOneByNoPendaftaran($request->get('no_pendaftaran'));
        if (count($p_get)>0) {
            $r_get = $r->getByKodeRuang($request->get('kode_ruang'));
            $tt->mst_pendaftaran_id = $p_get->id;
            $tt->ref_ruang_id = $r_get->id;
            $tt->save();
            return 'ok';
        } else {
            $response = response()->json(['error' => 'nomor pendaftaran tdk ditemukan dalam database!'], 422);
            return $response;
        }
    }


    public function import(RuangRepository $r)
    {
        $kode_ruang = $r->getDropDown();
        return view($this->base_view.'popup.import', compact('kode_ruang'));
    }


    public function do_import(Request $request, RuangRepository $r, PendaftaranRepository $p)
    {
        $files = $request->file('userfile');
        $results = array();
 
        try {
            $data = new \Reader($files);
            $a = $data->rowcount($sheet_index=0);
            for ($i=1;$i<=$a;$i++) {
                if ($i != 1 && $i != 2) {
                    $no    = trim($data->val($i, 'B')); //no pendaftaran
                      $no2    = trim($data->val($i, 'C')); // kode ruang
                       if ($no != null && $no2 != null) {
                           \Queue::push(new InsertTesTulis($no2, $no));
                       }
                }
            }
        } catch (Exception $e) {
            $name = $file->getClientOriginalName().' import gagal!';
            $results[] = compact('name');
            \Log::warning('data tidak ditemukan');
        }
 
        return redirect()->route('baa_tes_tulis.index');
    }


    public function export_pdf()
    {
        $tt = TesTulis::with('mst_pendaftaran', 'ref_ruang')->get();
        $html = view($this->base_view.'cetak.index', compact('tt'));
        $this->mpdf=new \mPDF('', 'A4', '', '', '10', '10', '10', '107', '', '');
        $html = iconv("UTF-8", "UTF-8//IGNORE", $html);
        $this->mpdf->WriteHTML($html);
        $this->mpdf->debug = true;
        $this->mpdf->Output('tes_tulis_'.str_slug(\Fungsi::date_to_tgl(date('Y-m-d'))).'_'.date('H:i:s').'.pdf', 'I');
        return  PDF::load($html, 'A4', 'landscape')->show();
    }
}
