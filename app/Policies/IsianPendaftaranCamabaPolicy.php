<?php

namespace App\Policies;

use App\Helpers\SetupVariable;
use Illuminate\Auth\Access\HandlesAuthorization;

class IsianPendaftaranCamabaPolicy
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


    public function showIsianPendaftaran($user, $biodata)
    {
       $config =  SetupVariable::get('show_isian_pendaftaran_camaba');
       if($config == 1){
            return true;
       }

       return false;
    }


}
