<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PekerjaanOrtu extends Eloquent
{
    protected $table = 'ref_pekerjaan_ortu';
    protected $fillable = ['nama'];
}
