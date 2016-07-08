<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Pin;
use Illuminate\Database\Eloquent\Model;

class PenggunaPin extends Model
{

    protected $table = 'mst_pengguna_pin';
    protected $fillable = ['mst_pendaftaran_id', 'mst_pin_id'];


    public function mst_pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
    }


    public function mst_pin()
    {
        return $this->belongsTo(Pin::class, 'mst_pin_id');
    }
}
