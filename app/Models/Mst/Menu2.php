<?php

namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class Menu2 extends Model
{
    protected $table = 'mst_menu2';
    protected $fillable = [
    	'nama',
    	'keterangan',
    	'icon',
    	'kode_warna',
    	'url'
    ];
}
