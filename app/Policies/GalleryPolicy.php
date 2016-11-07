<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\SetupVariable as mSV;

class GalleryPolicy
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


    public function showGalleryFrontend($user, $gallery)
    {
        $v = mSV::whereVariable('show_gallery_frontend')->first(); 
        if(count($v)>0){
            if($v->value == 1){
                return true;
            }
        }    
        return true;
    }



}
