<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Tinggal extends Eloquent{
	protected $table = 'ref_tinggal';
	protected $fillable = ['nama'];
}