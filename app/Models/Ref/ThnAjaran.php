<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class ThnAjaran extends Eloquent{
	protected $table = 'ref_thn_ajaran';
	protected $fillable = ['nama'];
}