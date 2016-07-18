<?php 

namespace App\Services\lampiranBerita;

use App\Models\Mst\LampiranBerita;

class downloadLampiranBeritaService
{

	protected $lampiran;

	public function __construct(LampiranBerita $lampiran)
	{
		$this->lampiran = $lampiran;
	}


	public function handle($id)
	{
        // check apakah ID menggunakan angka atau hash
		if(!is_numeric($id)){
	        $hashids = new \Hashids\Hashids('qertymyr');
	        $numbers = $hashids->decode($id);
	        $id = $numbers[2];
		}

                
        $f = $this->lampiran->find($id);
        if (count($f)>0) {
            if (file_exists(storage_path('lampiran/'.$f->nama_file_tersimpan))) {

            	// increment download counter
            	$f->jml_download = $f->jml_download+1;
            	$f->save();

            	// download
                return response()->download(storage_path('lampiran/'.$f->nama_file_tersimpan), $f->nama_file_asli);
            } else {
                return response('sepertinya file <b>'.$f->nama_file_asli.'</b> sudah terhapus', 404);
            }
        } else {
            abort(404);
        }

	}

}
