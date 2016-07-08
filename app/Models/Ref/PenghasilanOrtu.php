<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PenghasilanOrtu extends Eloquent
{
    protected $table = 'ref_penghasilan_ortu';
    protected $fillable = ['nama'];
}
