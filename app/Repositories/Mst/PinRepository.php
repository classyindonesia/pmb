<?php namespace App\Repositories\Mst;

use App\Models\Mst\Pin;

class PinRepository
{

    public function getWhereOne($pin)
    {
        $check = Pin::where('pin', '=', $pin)->first();
        return $check;
    }
}
