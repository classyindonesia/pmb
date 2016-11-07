<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\AlbumGalery;
use App\Models\Mst\Galery;
use App\Models\SetupVariable as mSV;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public $base_view = 'konten.frontend.gallery.';
    protected $gallery;
    protected $album_gallery;

    public function __construct(Galery $gallery, AlbumGalery $album_gallery)
    {
    	$this->album_gallery = $album_gallery;
    	$this->gallery = $gallery;
    	view()->share('gallery_home', true);
    	view()->share('base_view', $this->base_view);
    }


    public function index()
    {
    	$v = mSV::whereVariable('show_gallery_frontend')->first(); 
    	if(count($v)>0){
    		if($v->value == 1){		
		    	$album_gallery = $this->album_gallery->orderBy('id', 'DESC')->paginate(9);
		    	return view($this->base_view.'index', compact('album_gallery'));
    		}
    	}else{
    		abort(404);
    	}
    }


    public function images($mst_album_id)
    {
    	$v = mSV::whereVariable('show_gallery_frontend')->first(); 
    	if(count($v)>0){
    		if($v->value == 1){		
		    	$album_gallery = $this->album_gallery->find($mst_album_id);
		    	return view($this->base_view.'index', compact('album_gallery'));
    		}
    	}else{
    		abort(404);
    	}    	
    }

    

}
