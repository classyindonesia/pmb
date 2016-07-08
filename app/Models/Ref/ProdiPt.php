<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class ProdiPt extends Eloquent
{
    protected $table = 'ref_prodi_pt';
    protected $fillable = ['nama', 'ref_perguruan_tinggi_id'];





    public function ref_perguruan_tinggi()
    {
        return $this->belongsTo('\App\Models\Ref\PerguruanTinggi', 'ref_perguruan_tinggi_id');
    }
}
