<?php namespace App\Http\Controllers\Backend\Camaba;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Ref\ThnAjaran;
use App\Repositories\Mst\PendaftaranRepository;
use Auth, PDF,SV;
use Illuminate\Http\Request;

class KartuPendaftaranController extends Controller {

	private $base_view = 'konten.backend.camaba.kartu_pendaftaran.';

	public function __construct(){
		view()->share('kartu_pendaftaran_home', true);
	}

	public function index(PendaftaranRepository $p){
		$base_view = $this->base_view;
		$b = $p->getByEmail(Auth::user()->email);
		$sv = new SV;
		return view($this->base_view.'index', compact('base_view', 'b', 'sv'));
	}


	public function cetak(PendaftaranRepository $p){
		$thn_akademik = ThnAjaran::find(SV::get('ref_thn_ajaran_id'));
		if(count($thn_akademik)>0){
			$thn_akademik = $thn_akademik->nama;
		}else{
			$thn_akademik = '-';
		}
		$base_view = $this->base_view;
		$b = $p->getByEmail(Auth::user()->email);
	    $html = view($this->base_view.'cetak.index', compact('b', 'thn_akademik', 'base_view'));
 
		$this->mpdf=new \mPDF('','A4-L','','','10','10','1','','','');
		//$stylesheet = file_get_contents(public_path('css/main.css'));
		//$this->mpdf->WriteHTML($stylesheet,1);
		   		
		$html = iconv("UTF-8","UTF-8//IGNORE",$html);
	    $this->mpdf->WriteHTML($html);
	    $this->mpdf->debug = true;
	    $this->mpdf->Output('kartu_pendaftaran_'.$b->no_pendaftaran.'_'.str_slug(\Fungsi::date_to_tgl(date('Y-m-d'))).'_'.date('H:i:s').'.pdf', 'I');   
 		return  PDF::load($html, 'A4', 'portrait')->show();


 	}


}
