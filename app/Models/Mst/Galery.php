<?php

namespace App\Models\Mst;

use App\Models\Mst\AlbumGalery;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'mst_galery';
    protected $fillable = [
    	'nama_file',
		'mst_album_galery_id',
		'mst_user_id',
    ];

    protected $appends = [
    	'fk__mst_album_galery'
    ];

    public function getFkMstAlbumGaleryAttribute()
    {
    	$q = $this->mst_album_galery();
    	if(count($q)>0){
    		return $q->nama;
    	}
    }

    public function mst_album_galery()
    {
    	return $this->belongsTo(AlbumGalery::class, 'mst_album_galery_id');
    }


}
