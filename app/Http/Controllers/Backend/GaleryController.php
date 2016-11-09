<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\AlbumGalery;
use App\Models\Mst\Galery;
use App\Services\Galery\deleteAlbumGaleryService;
use App\Services\Galery\deleteImageService;
use App\Services\Galery\doUploadImageService;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    
    protected $album;
    protected $galery;
    protected $request;

    public $base_view = 'konten.backend.galery.';

    public function __construct(AlbumGalery $album, Galery $galery, Request $request)
    {
    	$this->request = $request;
    	$this->album = $album; 
    	$this->galery = $galery;
    	view()->share('base_view', $this->base_view);
    	view()->share('backend_galery_home', true);
    }


    public function index()
    {
    	$search = $this->request->get('search');
    	if($search){
	    	$album = $this->album->where('nama', 'like', '%'.$search.'%')->paginate(10);
    	}else{
    		$album = $this->album->paginate(10);
    	}
    	$vars = compact('album');
    	return view($this->base_view.'album.index', $vars);
    }

    public function add_album()
    {
    	return view($this->base_view.'album.popup.add_album');
    }

    public function edit_album($id)
    {
    	$album = $this->album->find($id);
    	$vars = compact('album');
    	return view($this->base_view.'album.popup.edit_album', $vars);
    }

    public function insert_album()
    {
    	$this->validate($this->request, [
    		'nama'	=> 'required'
    	]);
    	$data = $this->request->except('_token');
    	return $this->album->create($data);
    }

    public function update_album()
    {
    	$this->validate($this->request, [
    		'nama'	=> 'required'
    	]);
    	$data = $this->request->except('_token');
    	$this->album->whereId($this->request->id)->update($data);    	
    	return $this->album->find($this->request->id);
    }

    public function del_album(deleteAlbumGaleryService $album)
    {
        return $album->handle();
    }


    public function upload_gambar($id)
    {
		$max = explode('M', ini_get("upload_max_filesize"));
		$album = $this->album->find($id);
		$max_upload = $max[0] * 1048576;
		$vars = compact('max_upload', 'album');    	
    	return view($this->base_view.'images.popup.upload_gambar', $vars);
    }

    public function do_upload_gambar(doUploadImageService $upload)
    {
    	return $upload->handle();
    }

    public function images($mst_album_galery_id)
    {
        $album = $this->album->find($mst_album_galery_id);
        $vars = compact('album');
        return view($this->base_view.'images.index', $vars);
    }

    public function delete_image(deleteImageService $delete)
    {
        return $delete->handle();
    }



}
