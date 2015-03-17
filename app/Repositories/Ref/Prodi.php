<?php namespace App\Repositories\Ref;


use App\Models\Ref\Prodi as Prd;
class Prodi{


	public function getAll(){
		return Prd::all();
	}


}