<?php 

namespace App\Services\Galery;

use App\Models\Mst\AlbumGalery;
use Illuminate\Http\Request;

class deleteAlbumGaleryService 
{
	protected $album;
	protected $request;

	public function __construct(AlbumGalery $album, Request $request)
	{
		$this->request = $request;
		$this->album = $album;
	}


	public function handle()
	{
    	$a = $this->album->find($this->request->id);
    	foreach($a->mst_galery as $list){
    		$path = public_path('upload/galery/'.$list->nama_file);
    		$path_thumbnail = public_path('upload/galery/thumbnail_'.$list->nama_file);
    		if(file_exists($path)){
    			unlink($path);
    		}
    		if(file_exists($path_thumbnail)){
    			unlink($path_thumbnail);
    		}
    		$list->delete();
    	}
    	$a->delete();
    	return 'ok';		
	}

}