<?php namespace App\Http\Controllers\Backend\Dashboard;

use App\Models\Ref\Gelombang;
use App\Repositories\Ref\Prodi;


trait LevelOperatorTrait{




	public function level_operator(){
		$gelombang = Gelombang::where('ref_thn_ajaran_id', '=', \SV::get('ref_thn_ajaran_id'))
			->with('mst_pendaftaran')->get();
		return view($this->base_view.'operator.index', 
			compact('gelombang'));			
	}


	public function view_statistik($ref_gelombang_id, Prodi $p){
		$gelombang = Gelombang::findOrFail($ref_gelombang_id);
		$prodi = $p->getAll(); 
  		return view($this->base_view.'operator.popup.view_statistik', compact('gelombang', 'prodi'));
	}






}