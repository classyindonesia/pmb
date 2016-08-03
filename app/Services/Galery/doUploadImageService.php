<?php 

namespace App\Services\Galery;

use App\Models\Mst\Galery;
use Illuminate\Http\Request;

class doUploadImageService
{

	protected $request;
	private $uploadPath;
	private $watermark_file;

	public function __construct(Request $request)
	{
		$this->watermark_file = public_path('img/watermark/watermark.png');
		$assetPath = '/upload/galery/';
		$this->uploadPath = public_path($assetPath);
		$this->request = $request;
	}


	public function applyWatermark($path_to_file)
	{
		// $jenis_ekstensi = $this->get_jenis_eksternsi($path_to_file);
		if($jenis_ekstensi == 1){
			//jika gambar, maka insert ke tabel watermark+create new gambar
			$img = \Image::make($path_to_file)
				->insert(public_path('upload/').env('NAMA_FILE_WATERMARK'), env('SETTING_POSISI_WATERMARK'), 10, 10)
				->save(public_path('/upload/arsip/watermark/').$path_to_file);
		}
	}


	public function handle()
	{
		
		$files =  $this->request->file('files');
		$results = [];
			foreach($files as $file){
				try {

					$nama_file = md5($file->getClientOriginalName().'_'.date('YmdHis')).'.jpg';
				 	$file->move($this->uploadPath, $nama_file);
				 	$name = $file->getClientOriginalName().' telah tersimpan! ';

				 	//create thumbnail
				 	$this->create_thumbnail($nama_file);

				 	//insert to db
				 	$data_insert = [
				 		'nama_file'	=> $nama_file,
				 		'mst_album_galery_id' => $this->request->mst_album_galery_id
				 	];
				 	Galery::create($data_insert);
				 	//end of insert to db
				}catch(Exception $e) {
			 		$name = $file->getClientOriginalName().' gagal tersimpan!';
				}				
			}
		$results[] = compact('name');
	 return array(
	        'files' => $results,
 	    );			
	}


	private function create_thumbnail($nama_file){
		// create_thumbnail
		$img = \Image::make(public_path('upload/galery/'.$nama_file));
		// prevent possible upsizing
		$img->resize(340, null, function ($constraint) {
		    $constraint->aspectRatio();
		    $constraint->upsize();
		});
 		$img->save(public_path('upload/galery/thumbnail_'.$nama_file));
		// end of create_thumbnail		
	}



}