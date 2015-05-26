<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class PerguruanTinggi extends Eloquent{
	protected $table = 'ref_perguruan_tinggi';
	protected $fillable = ['nama'];
}