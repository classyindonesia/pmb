<?php namespace App\Models\Mst;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'mst_photo';
	protected $fillable = ['mst_pendaftaran_id', 'nama_file_asli'];




}
