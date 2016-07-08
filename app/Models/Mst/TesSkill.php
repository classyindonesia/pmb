<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Mst\TesSkill;
use App\Models\Ref\Ruang;
use Illuminate\Database\Eloquent\Model;

class TesSkill extends Model
{

    protected $table = 'mst_tes_skill';
    protected $fillable = ['mst_pendaftaran_id', 'ref_ruang_id', 'ref_tes_skill_id'];

    public function mst_pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
    }

    public function ref_ruang()
    {
        return $this->belongsTo(Ruang::class, 'ref_ruang_id');
    }

    public function ref_tes_skill()
    {
        return $this->belongsTo(TesSkill::class, 'ref_tes_skill_id');
    }
}
