<?php namespace App\Http\Controllers\Backend\Baa;

use App\Commands\KirimSms;
use App\Http\Controllers\Controller;
use App\Models\Mst\Berkas;
use App\Models\Mst\GantiProdi;
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Photo;
use App\Models\Mst\User;
use App\Models\Ref\ThnAjaran;
use App\Repositories\Mst\PendaftaranRepository;
use App\Repositories\Ref\Prodi;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
 

    private $base_view = 'konten.backend.baa.pendaftaran.';

    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('data_pendaftaran_home', true);
    }


    public function pendaftaran_camaba(Request $request, PendaftaranRepository $p)
    {
        if ($request->get('search')) {
            $pendaftaran = $p->getBySearchBaa($request->search);
        } else {
            $pendaftaran = $p->getAllBaa();
        }
        $list_pendaftaran_home = true;
        $pendaftaran_camaba_home = true;
        $route_search = 'baa_data_pendaftaran.pendaftaran_camaba';
        return view($this->base_view.'index',
            compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_home', 'route_search'));
    }

    public function pendaftaran_camaba_online(Request $request, PendaftaranRepository $p)
    {
        if ($request->get('search')) {
            $pendaftaran = $p->getBySearchBaa($request->search, 1);
        } else {
            $pendaftaran = $p->getByJenisDaftarBaa(1);
        }
        $list_pendaftaran_home = true;
        $pendaftaran_camaba_online_home = true;
        $route_search = 'baa_data_pendaftaran.pendaftaran_camaba_online';
        return view($this->base_view.'index',
            compact('pendaftaran', 'list_pendaftaran_home', 'pendaftaran_camaba_online_home', 'route_search'));
    }

    public function pendaftaran_camaba_offline(Request $request, PendaftaranRepository $p)
    {
        if ($request->get('search')) {
            $pendaftaran = $p->getBySearchBaa($request->search, 0);
        } else {
            $pendaftaran = $p->getByJenisDaftarBaa(0);
        }
        $list_pendaftaran_home = true;
        $pendaftaran_camaba_offline_home = true;
        $route_search = 'baa_data_pendaftaran.pendaftaran_camaba_offline';
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



    public function export_data()
    {
        $now = \Fungsi::date_to_tgl(date('Y-m-d_H:i:s'));
        $nama_file = str_slug('data_pendaftaran_'.$now);
        \Excel::create($nama_file, function ($excel) {
            $excel->setTitle('aplikasi pendaftaran online UNP Kediri');
            $excel->setCreator('App PMB')
                  ->setCompany('UNP Kediri');
            $excel->setDescription('Generate dari aplikasi pendaftaran online UNP Kediri');



            /* sheet awal */
            $excel->sheet('PMB list pendaftar', function ($sheet) {
                $sheet->setHeight([1 => 50, 2 => 27]);
                $sheet->row(1, ['List Pendaftar '.env('NAMA_APP')]);
                $sheet->row(2, [
                    'No.', 'No Pendaftaran', 'Nama', 'Alamat',
                    'No HP', 'Prodi 1', 'Prodi 2', 'status foto', 'status berkas'
                    ]);
                $sheet->cells('A1:I1', function ($cells) {
                    $cells->setFontSize(16);
                });
                $sheet->setBorder('A2:I2', 'thin');
                $sheet->cells('A2:I2', function ($cells) {
                    $cells->setBackground('#DDEEFF');
                });
                $sheet->setColumnFormat(['I' => '@', 'E' => '@']);


                /* start create data row */
                $i = 3;
                $pendaftaran = new PendaftaranRepository;
                $pendaftaran = $pendaftaran->getAllPlainBaa();
                    foreach ($pendaftaran as $list) {
                        $sheet->setHeight($i, 20);

                        if ($list->jenis_kelamin == 'L') {
                            $jk = 'Laki-laki';
                        } else {
                            $jk = 'Perempuan';
                        }

                        if (count($list->ref_prodi1)>0) {
                            $prodi1 = $list->ref_prodi1->nama;
                        } else {
                            $prodi1 = '-';
                        }
                        if (count($list->ref_prodi2)>0) {
                            $prodi2 = $list->ref_prodi2->nama;
                        } else {
                            $prodi2 = '-';
                        }
                        if (count($list->mst_photo)>0) {
                            $photo = 'ada';
                        } else {
                            $photo = 'belum ada';
                        }
                        if (count($list->mst_berkas)>0) {
                            $berkas = 'ada';
                        } else {
                            $berkas = 'belum ada';
                        }

                        $sheet->row($i, [
                            $i-2, $list->no_pendaftaran,
                            $list->nama, $list->alamat,
                            "'".$list->no_hp, $prodi1,
                            $prodi2, $photo,
                            $berkas,
                        ]);

                        $i++;
                    }
                /* end create data row */
                


                $sheet->mergeCells('A1:I1');
                $sheet->setAutoSize(true);
                $sheet->setFreeze('A3');

            });


        })->export('xls');
    }



    public function pilih_tahun_ajaran()
    {
        $thn_ajaran = ThnAjaran::all();
        return view($this->base_view.'popup.pilih_tahun_ajaran', compact('thn_ajaran'));
    }

    public function set_tahun_ajaran()
    {
        \Session::put("ref_thn_ajaran_id", \Input::get('id'));
        return 'ok';
    }
}
