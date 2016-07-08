<?php namespace App\Models\Ref;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Prodi extends Eloquent
{
    protected $table = 'ref_prodi';
    protected $fillable = ['nama', 'kode_prodi'];

    public function mst_pendaftaran1()
    {
        return $this->hasMany('\App\Models\Mst\Pendaftaran', 'ref_prodi_id1');
    }


    public function mst_pendaftaran2()
    {
        return $this->hasMany('\App\Models\Mst\Pendaftaran', 'ref_prodi_id2');
    }
}
