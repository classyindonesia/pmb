<?php

namespace App\Models\Mst;

use App\Models\Bml\MstBiodata;
use App\Models\Mst\Pendaftaran;
use Illuminate\Database\Eloquent\Model;

class ValidasiBiodata extends Model
{
    protected $table = 'mst_validasi_biodata';
    protected $fillable = [
    	'mst_pendaftaran_id', 'npm'
    ];

    protected $appends = [
    	'fk__mst_pendaftaran_nama', 'fk__ref_prodi_bml'
    ];

    public function mst_pendaftaran()
    {
    	return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
    }

    public function mst_biodata_bml()
    {
        return $this->belongsTo(MstBiodata::class, 'npm', 'npm');
    }

    public function getFkRefProdiBmlAttribute()
    {
        $q = $this->mst_biodata_bml()->first();
        if(count($q)>0){
            $q_prodi = $q->ref_prodi()->first();
            if(count($q_prodi)>0){
                return $q_prodi->nama;
            }else{
                return null;
            }
        }
        return null;
    }

    public function getFkMstPendaftaranNamaAttribute()
    {
    	$q = $this->mst_pendaftaran()->first();
    	if(count($q)>0){
    		return $q->nama;
    	}else{
    		return null;
    	}
    }



}
