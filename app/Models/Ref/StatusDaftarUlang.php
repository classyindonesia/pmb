<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class StatusDaftarUlang extends Eloquent{
	protected $table = 'ref_status_daftar_ulang';
	protected $fillable = ['nama'];
}