<?php 

namespace App\Services\Pendaftaran;

use App\Jobs\Pendaftaran\doImportPendaftaranJob;
use Illuminate\Http\Request;

class doImportPendaftaranService
{

	protected $request; 

	public function __construct(Request $request)
	{
		$this->request = $request;
	}


	public function handle()
	{
		$hidden_button = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        if(!file_exists($_FILES['userfile']['tmp_name']) || !is_uploaded_file($_FILES['userfile']['tmp_name'])) {
	        \Session::flash('pesan', '<div class="alert alert-danger"> '.$hidden_button.' error! no file! </div>');
	        return redirect()->back();
        }else{
        	$nama_file_temp = 'pendaftaran_'.date('YmdHi').'.xls';
            $file = $_FILES['userfile']['tmp_name'];
            $pindah_file = rename($file, storage_path('logs/'.$nama_file_temp));
            chmod(storage_path('logs/'.$nama_file_temp), 0777);
            $job = new doImportPendaftaranJob(storage_path('logs/'.$nama_file_temp));
            \Queue::push($job);
            \Session::flash('pesan', '<div class="alert alert-success"> '.$hidden_button.' berhasil import </div>');
        	return redirect()->back();
        }
	}


}