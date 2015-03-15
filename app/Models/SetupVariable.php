<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;


class SetupVariable extends Eloquent{
	protected $table = 'setup_variable';
	protected $fillable = ['value', 'variable', 'keterangan'];


 
}