<?php namespace App\Models\Ref;

use App\Models\Bml\RefProdi;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Prodi extends Eloquent
{
    protected $table = 'ref_prodi';
    protected $fillable = ['nama', 'kode_prodi'];

    protected $appends = [
        'fk__ref_prodi_bml', 'fk__ref_prodi_bml_id'
    ];

    public function mst_pendaftaran1()
    {
        return $this->hasMany('\App\Models\Mst\Pendaftaran', 'ref_prodi_id1');
    }


    public function mst_pendaftaran2()
    {
        return $this->hasMany('\App\Models\Mst\Pendaftaran', 'ref_prodi_id2');
    }

    public function ref_prodi_bml()
    {
        return $this->hasOne(RefProdi::class, 'ref_pmb_prodi_id', 'kode_prodi');
    }

    public function getFkRefProdiBmlAttribute()
    {
        $q = $this->ref_prodi_bml();
        if(count($q)>0){
            return $this->ref_prodi_bml()->first()->nama;
        }else{
            return null;
        }
    }

    public function getFkRefProdiBmlIdAttribute()
    {
        $q = $this->ref_prodi_bml()->first();
        if(count($q)>0){
            return $q->id;
        }else{
            return null;
        }
    }

}
