<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Sms extends Eloquent{

	protected $connection = 'sms';
	protected $table = 'pmb_sms_aktivasi';
	public $timestamps = false;

	protected $fillable = ['kode_pendaftaran', 'no_hp', 'pesan', 'statusKirim'];




}