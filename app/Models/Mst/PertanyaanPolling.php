<?php 

namespace App\Models\Mst;

use App\Models\Mst\PilihanPolling;
use Illuminate\Database\Eloquent\Model as Eloquent;

class PertanyaanPolling extends Eloquent
{

    protected $fillable = ['pertanyaan', 'judul'];
    protected $table = 'mst_pertanyaan_polling';



    public function mst_pilihan_polling()
    {
        return $this->hasMany(PilihanPolling::class, 'mst_pertanyaan_polling_id');
    }
}
