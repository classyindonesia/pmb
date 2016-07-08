<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Ruang extends Eloquent
{
    protected $table = 'ref_ruang';
    protected $fillable = ['nama', 'kode_ruang'];
}
