<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class Menu2Policy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showMenu2()
    {
        if( auth()->user()->ref_user_level_id == 2 ){
            return true;
        }
        return false;
    }

}
