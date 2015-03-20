<?php namespace App\Http\Controllers\Backend\Camaba\Step;

/* requests */
use Illuminate\Http\Request;

/* facades */
use Auth, Image;

/* models */
use App\Models\Mst\Berkas;

/* repo */
use App\Repositories\Mst\PendaftaranRepository;

trait UploadBerkasTrait{

	private $konten_view = 'konten.backend.dashboard.camaba.popup.upload_berkas.';


	public function upload_berkas(){
		$konten_view = $this->konten_view;
		$ijazah_home = true;
		$max = explode('M', ini_get("upload_max_filesize"));
		$max_upload = $max[0] * 1048576; 		
		return view($konten_view.'index', compact('konten_view', 'ijazah_home', 'max_upload'));
	}

	public function upload_surat_keterangan_lulus(){
		$konten_view = $this->konten_view;
		$surat_keterangan_home = true;
		$max = explode('M', ini_get("upload_max_filesize"));
		$max_upload = $max[0] * 1048576; 				
		return view($konten_view.'upload_surat_keterangan_lulus', 
			compact('konten_view', 'surat_keterangan_home', 'max_upload'));		
	}

	public function do_upload_berkas(Request $request, PendaftaranRepository $biodata){
		if($request->ref_jenis_berkas_id == 1){
			$folder_jenis = 'ijazah';
		}else{
			$folder_jenis = 'surat_keterangan_lulus';
		}
		$assetPath = '/upload/berkas/'.$folder_jenis;
		$uploadPath = public_path($assetPath);			
		$file =  $request->file('files');
		$results = [];

		 //move_uploaded_file($_FILES['webcam']['tmp_name'], 'webcam.jpg');
		try {
			$nama_file = md5(Auth::user()->email).'.jpg';
		 	$file->move($uploadPath, $nama_file);

		 	$name = $file->getClientOriginalName().' telah tersimpan! ';

		 	/* insert data ke db */
		 	$b = $biodata->getByEmail(Auth::user()->email);
		 	$check_foto = Berkas::where('mst_pendaftaran_id', '=', $b->id)
		 	->where('ref_jenis_berkas_id', '=', $request->ref_jenis_berkas_id)
		 	->first();
		 	if(count($check_foto)<=0){
			 	$f = new Berkas;
			 	$f->nama_file_asli = $nama_file;
			 	$f->mst_pendaftaran_id = $b->id;
			 	$f->ref_jenis_berkas_id = $request->ref_jenis_berkas_id;
			 	$f->save();		 		
		 	}
		}catch(Exception $e) {
	 		$name = $file->getClientOriginalName().' gagal tersimpan!';
	 		   
		}
		$results[] = compact('name');
	 return array(
	        'files' => $results,
 	    );	
	}


}