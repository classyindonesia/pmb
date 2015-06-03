<?php namespace App\Commands;

use App\Commands\Command;
use App\Models\Mst\Biodata;
use Illuminate\Contracts\Bus\SelfHandling;

class exportPdfBiodata extends Command implements SelfHandling {



	public $mst_biodata_id;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($mst_biodata_id)
	{
		$this->mst_biodata_id = $mst_biodata_id;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		$b = Biodata::findOrFail($this->mst_biodata_id);
		$base_view = 'konten.backend.baa.biodata.';
	    $html = view($base_view.'cetak.index', compact('b', 'base_view'));
 		$this->mpdf=new \mPDF(
					'',
					'A4',
					'',
					'',
					'10', //margin kiri
					'10', // margin kanan
					'0', //margin atas
					'',
					'',
					''
					);
		   		
		$html = iconv("UTF-8","UTF-8//IGNORE",$html);
	    $this->mpdf->WriteHTML($html);
	    $this->mpdf->debug = true;
	    $this->mpdf->Output('validasi_biodata_'.str_slug(\Fungsi::date_to_tgl(date('Y-m-d'))).'_'.date('H:i:s').'.pdf', 'I');   
 		return  PDF::load($html, 'A4', 'portrait')->show();
	}

}
