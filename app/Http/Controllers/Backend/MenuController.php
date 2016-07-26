<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menu;
    public $base_view = 'konten.backend.menu.';

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
        view()->share('backend_menu_home', true);
        view()->share('base_view', $this->base_view);
    }


    public function index()
    {
        $menu = $this->menu->whereParentId(0)->paginate(10);
        $vars = compact('menu');
        return view($this->base_view.'index', $vars);
    }

    public function child($parent_id)
    {
        $menu = $this->menu->whereParentId($parent_id)->paginate(10);
        $vars = compact('menu');
        return view($this->base_view.'index', $vars);
    }

    public function add()
    {
        $parent_menu = $this->menu->whereParentId(0)->get();
        $vars = compact('parent_menu');
        return view($this->base_view.'popup.add', $vars);
    }

    public function edit($id)
    {
        $parent_menu = $this->menu->whereParentId(0)->get();
        $menu = $this->menu->find($id);
        $vars = compact('parent_menu', 'menu');
        return view($this->base_view.'popup.edit', $vars);        
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'link' => 'required'
        ]);

       return $this->menu->create($request->except('_token'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'link' => 'required'
        ]);
     // update
     $this->menu->whereId($request->id)->update($request->except(['_token', 'id']));
     return $this->menu->find($request->id);
    }

    public function delete(Request $request)
    {
        $d = $this->menu->find($request->id);
        $d->delete();
        return 'ok';
    }

}
