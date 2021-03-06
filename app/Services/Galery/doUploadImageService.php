<?php 

namespace App\Services\Galery;

use App\Models\Mst\Galery;
use Illuminate\Http\Request;

class doUploadImageService
{

	protected $request;
	private $uploadPath;
	public $watermark_file;

	public function __construct(Request $request)
	{
		$this->watermark_file = public_path('img/watermark/'.env('WATERMARK_GALERY'));
		$assetPath = '/upload/galery/';
		$this->uploadPath = public_path($assetPath);
		$this->request = $request;
	}


	public function applyWatermark($path_to_file)
	{
		if(file_exists($this->watermark_file)){
			$img = \Image::make($path_to_file)
				->insert($this->watermark_file, env('SETTING_POSISI_WATERMARK'), 10, 10)
				->save($path_to_file);
			}else{
				\Log::info('file watermark '.$this->watermark_file.' tidak ditemukan, file '.$path_to_file.' tidak diberi watermark!');
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

				 	// apply watermark
				 	$this->applyWatermark(public_path('upload/galery/'.$nama_file));

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