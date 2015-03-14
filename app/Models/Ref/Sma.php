<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Sma extends Eloquent{
	protected $table = 'ref_sma';
	protected $fillable = ['nama'];
}