<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'mst_photo';
    protected $fillable = ['mst_pendaftaran_id', 'nama_file_asli'];


    public function mst_pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'mst_pendaftaran_id');
    }
}
