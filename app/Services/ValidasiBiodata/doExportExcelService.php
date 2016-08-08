<?php 

namespace App\Services\ValidasiBiodata;

use App\Models\Mst\ValidasiBiodata;

class doExportExcelService 
{

	protected $validasi_biodata;

	public function __construct(ValidasiBiodata $validasi_biodata)
	{
		$this->validasi_biodata = $validasi_biodata;
	}
	
	public function handle()
	{
       $now = \Fungsi::date_to_tgl(date('Y-m-d_H:i:s'));
        $nama_file = str_slug('data_npm_validasi_biodata_'.$now);
        \Excel::create($nama_file, function ($excel) {
            $excel->setTitle('NPM Validasi Biodata - aplikasi pendaftaran online UNP Kediri');
            $excel->setCreator('App PMB')
                  ->setCompany('UNP Kediri');
            $excel->setDescription('Generate dari aplikasi pendaftaran online UNP Kediri');



            /* sheet awal */
            $excel->sheet('NPM Validasi Biodata', function ($sheet) {
                $sheet->setHeight([1 => 50, 2 => 27]);
                $sheet->row(1, ['List Pendaftar '.env('NAMA_APP')]);
                $sheet->row(2, [
                    'No.', 'NPM', 'Nama', 'Prodi', 'tgl validasi'
                    ]);
                $sheet->cells('A1:E1', function ($cells) {
                    $cells->setFontSize(16);
                });
                $sheet->setBorder('A2:E2', 'thin');
                $sheet->cells('A2:E2', function ($cells) {
                    $cells->setBackground('#DDEEFF');
                });
                $sheet->setColumnFormat(['I' => '@', 'E' => '@']);


                /* start create data row */
                $i = 3;
               		$validasi_biodata = $this->validasi_biodata->all();

                    foreach ($validasi_biodata as $list) {
                        $sheet->setHeight($i, 20);
 
                        $sheet->row($i, [
                            $i-2, $list->npm,
                            $list->fk__mst_pendaftaran_nama, $list->fk__ref_prodi_bml,
                            \Fungsi::date_to_tgl(date('Y-m-d', strtotime($list->created_at)))
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