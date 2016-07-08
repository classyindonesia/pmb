<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Transportasi extends Eloquent
{
    protected $table = 'ref_transportasi';
    protected $fillable = ['nama'];
}
