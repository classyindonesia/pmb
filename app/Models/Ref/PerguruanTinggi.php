<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;


class PerguruanTinggi extends Eloquent{
	protected $table = 'ref_perguruan_tinggi';
	protected $fillable = ['nama'];



	public function ref_prodi_pt(){
		return $this->hasMany('\App\Models\Ref\ProdiPt', 'ref_perguruan_tinggi_id');
	}
}