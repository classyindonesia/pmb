<?php namespace App\Helpers;

use App\Models\SetupVariable as mSV;

class SetupVariable
{

    public static function get($variable)
    {
        $sv = mSV::where('variable', '=', $variable)->first();
        if (count($sv)>0) {
            return $sv->value;
        } else {
            return null;
        }
    }


    public static function set($variable, $value)
    {
        $sv = mSV::where('variable', '=', $variable)->first();
        $sv->value = $value;
        $sv->save();

        return 'ok';
    }
}
