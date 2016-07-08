<?php namespace App\Repositories\Mst;

use App\Models\Mst\ApiCall as AC;

class ApiCall
{

    public function search()
    {
        $api_call = AC::with('mst_user')
        ->where('result', 'like', '%'.\Session::get('pencarian_api').'%')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        if (count($api_call)<=0) {
            $api_call = AC::with('mst_user')
            ->where('ip', 'like', '%'.\Session::get('pencarian_api').'%')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        }
        if (count($api_call)<=0) {
            $api_call = AC::with('mst_user')
            ->where('nama', 'like', '%'.\Session::get('pencarian_api').'%')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        }

        return $api_call;
    }



    public function get()
    {
        $data = AC::with('mst_user')
                    ->paginate(10);
        return $data;
    }

    public function getOne($id)
    {
        $data = AC::findOrFail($id);
        return $data;
    }
}
