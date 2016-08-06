<?php

namespace App\Models\Bml;

use App\Models\Ref\Prodi;
use Illuminate\Database\Eloquent\Model;

class RefProdi extends Model
{
    protected $connection = 'bml';
    protected $table = 'ref_prodi';
    public $incrementing = false;
    protected $fillable = [
    	'nama', 'ref_pmb_prodi_id', 'ref_fakultas_id'
    ];

    public function ref_prodi_pmb()
    {
    	return $this->hasOne(Prodi::class, 'kode_prodi',  'ref_pmb_prodi_id');
    }
}
