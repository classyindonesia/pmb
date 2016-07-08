<?php 

namespace App\Repositories\Mst;

use App\Models\Mst\User;

class UserRepository
{


    public function get_all_user($pencarian = null)
    {
        $search = $pencarian->get('search');
        $level = $pencarian->get('level');
        //if($level == '' || $level == null) $level = [1, 2, 3,4];
        if ($search && $level) {
            $users = User::where('nama', 'like', '%'.$search.'%')
                    ->where('ref_user_level_id', '=', $level)
                    ->paginate(10);
            if (count($users)<=0) {
                $users = User::where('email', 'like', '%'.$search.'%')
                            ->where('ref_user_level_id', '=', $level)
                            ->paginate(10);
            }
            return $users;
        } elseif ($search) {
            $users = User::where('nama', 'like', '%'.$search.'%')
                    //->where('email', 'like', '%'.$search.'%')
                    ->paginate(10);
            if (count($users)<=0) {
                $users = User::where('email', 'like', '%'.$search.'%')
                        ->paginate(10);
            }
            return $users;
        } else {
            $users = User::orderBy('id', 'DESC')->paginate(10);
            return $users;
        }
    }
}
