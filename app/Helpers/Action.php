<?php namespace App\Helpers;

class Action
{


    public static function del($icon, $route_or_url, $id)
    {
        if ($icon == false) {
            $icon = 'fa fa-times';
        }
        return view('helpers.action.del', compact('icon', 'route_or_url', 'id'));
    }




    public static function edit($icon, $route_or_url, $id)
    {
        if ($icon == false) {
            $icon = 'fa fa-pencil-square';
        }
        return view('helpers.action.edit', compact('icon', 'route_or_url', 'id'));
    }


    public static function rest_del($icon, $route_or_url, $id)
    {
        if ($icon == false) {
            $icon = 'fa fa-times';
        }
        return view('helpers.action.rest_del', compact('icon', 'route_or_url', 'id'));
    }


    public static function update_variable($init_id, $variable)
    {
        return view('helpers.action.tombol_update_variable', compact('init_id', 'variable'));
    }
}
