<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class SetupVariable extends Eloquent
{
    protected $table = 'setup_variable';
    protected $fillable = ['value', 'variable', 'keterangan'];

    public function get_val($var)
    {
        $v = $this->whereVariable($var)->first();
        if (count($v)>0) {
            $value = $v->value;
        } else {
            $value = null;
        }

        return $value;
    }
}
