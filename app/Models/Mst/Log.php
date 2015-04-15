<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model as Eloquent;
 
class Log extends Eloquent {

	protected $fillable = ['mst_user_id', 'log'];
	protected $table = 'mst_log';




}