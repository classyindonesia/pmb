<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Gelombang extends Eloquent
{
    protected $table = 'ref_gelombang';
    protected $fillable = ['nama', 'ref_thn_ajaran_id', 'biaya'];


    public function ref_thn_ajaran()
    {
        return $this->belongsTo('\App\Models\Ref\ThnAjaran', 'ref_thn_ajaran_id');
    }

    public function mst_pendaftaran()
    {
        return $this->hasMany('\App\Models\Mst\Pendaftaran', 'ref_gelombang_id');
    }
}
