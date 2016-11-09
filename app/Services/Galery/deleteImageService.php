<?php 

namespace App\Services\Galery;

use App\Models\Mst\Galery;
use Illuminate\Http\Request;

class deleteImageService 
{

	protected $gallery;
	protected $request;

	public function __construct(Galery $gallery, Request $request)
	{
		$this->request = $request;
		$this->gallery = $gallery;
	}


	public function handle()
	{
		$id = $this->request->id;
		$gallery = $this->gallery->find($id);
		if(count($gallery)>0){
			$path = public_path('upload/galery');
			if(file_exists($path.'/'.$gallery->nama_file)){
				unlink($path.'/'.$gallery->nama_file);
			}
			if(file_exists($path.'/thumbnail_'.$gallery->nama_file)){
				unlink($path.'/thumbnail_'.$gallery->nama_file);
			}
			$gallery->delete();
		}
	}


}