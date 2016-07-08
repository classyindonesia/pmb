<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pendidikan extends Eloquent
{
    protected $table = 'ref_pendidikan';
    protected $fillable = ['nama'];
}
