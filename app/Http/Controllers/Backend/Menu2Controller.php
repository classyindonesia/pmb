<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Menu2;
use Illuminate\Http\Request;

class Menu2Controller extends Controller
{

    public $base_view = 'konten.backend.menu2.';
    protected $menu2;

    public function __construct(Menu2 $menu2)
    {
    	$this->menu2 = $menu2;
    	view()->share('base_view', $this->base_view);
    	view()->share('backend_menu2_home', true);
    }

    public function index()
    {
    	$this->authorize('showMenu2', Menu2::class);
    	$menu2 = $this->menu2->orderBy('id', 'DESC')->paginate(10);
    	return view($this->base_view.'index', compact('menu2'));
    }

    public function add()
    {
    	return view($this->base_view.'popup.add');
    }

    public function insert()
    {
    	$this->validate(request(), [
    		'nama'			=> 'required',
    		'kode_warna'	=> 'required',
    		'keterangan'	=> 'required',
    		'url'			=> 'required|url'
    	]);
    	return $this->menu2->create(request()->except('_token'));
    }

    public function edit($id)
    {
    	$menu2 = $this->menu2->find($id);
    	return view($this->base_view.'popup.edit', compact('menu2'));
    }

    public function update()
    {
    	$this->validate(request(), [
    		'nama'			=> 'required',
    		'kode_warna'	=> 'required',
    		'keterangan'	=> 'required',
    		'url'			=> 'required|url'
    	]);
    	$this->menu2->whereId(request()->id)->update(request()->except('_token'));    	
    	return 'ok';
    }


    public function delete()
    {
    	$q = $this->menu2->find(request()->id);
    	if(count($q)>0){
    		$q->delete();
    	}
    	return 'ok';
    }

}
