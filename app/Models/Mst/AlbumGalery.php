<?php

namespace App\Models\Mst;

use App\Models\Mst\Galery;
use Illuminate\Database\Eloquent\Model;

class AlbumGalery extends Model
{
    protected $table = 'mst_album_galery';
    protected $fillable = ['nama', 'keterangan'];

    public function mst_galery()
    {
    	return $this->hasMany(Galery::class, 'mst_album_galery_id');
    }
    
}
