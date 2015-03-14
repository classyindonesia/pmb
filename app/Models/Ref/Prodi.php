<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Prodi extends Eloquent{
	protected $table = 'ref_prodi';
	protected $fillable = ['nama', 'kode_prodi'];
}