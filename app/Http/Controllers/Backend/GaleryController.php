<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\AlbumGalery;
use App\Models\Mst\Galery;
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
    	return view($this->base_view.'index', $vars);
    }

    public function add_album()
    {
    	return view($this->base_view.'popup.add_album');
    }

    public function edit_album($id)
    {
    	$album = $this->album->find($id);
    	$vars = compact('album');
    	return view($this->base_view.'popup.edit_album', $vars);
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

    public function del_album()
    {
    	$a = $this->album->find($this->request->id);
    	foreach($a->mst_galery as $list){
    		$path = public_path('upload/galery/'.$list->nama_file);
    		if(file_exists($path)){
    			unlink($path);
    		}
    		$list->delete();
    	}
    	$a->delete();
    	return 'ok';
    }

    

}
