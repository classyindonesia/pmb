<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Identitas extends Eloquent{
	protected $table = 'ref_identitas';
	protected $fillable = ['nama'];
}