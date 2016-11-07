<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Galery;
use Illuminate\Http\Request;
use App\Models\SetupVariable as mSV;

class GalleryController extends Controller
{
    public $base_view = 'konten.frontend.gallery.';
    protected $gallery;

    public function __construct(Galery $gallery)
    {
    	$this->gallery = $gallery;
    	view()->share('gallery_home', true);
    	view()->share('base_view', $this->base_view);
    }


    public function index()
    {
    	$v = mSV::whereVariable('show_gallery_frontend')->first(); 
    	if(count($v)>0){
    		if($v->value == 1){		
		    	$gallery = $this->gallery->orderBy('id', 'DESC')->pagination(10);
		    	return view($this->base_view.'index', compact('gallery'));
    		}
    	}else{
    		abort(404);
    	}
    }

    

}
