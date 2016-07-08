<?php namespace App\Repositories\Ref;

use App\Models\Ref\Sma as Sm;

class Sma
{


    public function getAll()
    {
        return Sm::all();
    }
}
