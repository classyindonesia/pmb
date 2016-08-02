<?php 

namespace App\Services\Pendaftaran;

use App\Repositories\Mst\PendaftaranRepository;

class exportPendaftaranService 
{


	public function handle()
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
                $pendaftaran = $pendaftaran->getAllPlain();
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

}