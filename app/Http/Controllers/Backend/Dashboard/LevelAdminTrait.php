<?php namespace App\Http\Controllers\Backend\Dashboard;

use App\Models\Mst\Pin;
use App\Models\Mst\User;
 


trait LevelAdminTrait{




 	public function level_admin(){
 		$jml_user = User::count();
 		$jml_pin = Pin::count();
 		return view('konten.backend.dashboard.admin.index', 
 			compact('jml_user', 'jml_pin'));
 	}





}