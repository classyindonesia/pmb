<?php namespace App\Repositories\Ref;

use App\Models\Ref\Gelombang as Glb;

class Gelombang
{


    public function getAll()
    {
        return Glb::all();
    }
}
