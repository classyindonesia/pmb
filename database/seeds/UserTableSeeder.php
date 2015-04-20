<?php

use Illuminate\Database\Seeder;
use App\Models\Mst\User;
use App\Models\Ref\UserLevel;

class UserTableSeeder extends Seeder {

    public function run(){

    	/* insert data utk user admin */
    	$data = User::where('email', '=', 'admin@example.com')->first();
    	if(count($data)<=0){
    		$data_insert = [
    			'email' => 'admin@example.com', 
    			'nama' => 'Administrator', 
    			'password' => 'admin',
    			'ref_user_level_id'	=> 1,
    			];
    		User::create($data_insert);
    	} 


        /* insert data level user */
        $data = UserLevel::find(1);
        if(count($data)<=0){
            $data_insert = [
                 'nama' => 'Administrator', 
                 'id'    => 1,
                  ];
            UserLevel::create($data_insert);
        }

        $data = UserLevel::find(2);
        if(count($data)<=0){
            $data_insert = [
                 'nama' => 'Web', 
                 'id'    => 2,
                  ];
            UserLevel::create($data_insert);
        }

        $data = UserLevel::find(3);
        if(count($data)<=0){
            $data_insert = [
                 'nama' => 'Operator', 
                 'id'    => 3,
                  ];
            UserLevel::create($data_insert);
        }

        $data = UserLevel::find(4);
        if(count($data)<=0){
            $data_insert = [
                'id'    => 4,
                 'nama' => 'Camaba', 
                  ];
            UserLevel::create($data_insert);
        }

        /* api akses */
        $data = UserLevel::find(5);
        if(count($data)<=0){
            $data_insert = [
                'id'    => 5,
                 'nama' => 'API Akses', 
                  ];
            UserLevel::create($data_insert);
        }


        /* level BAA */
        $data = UserLevel::find(6);
        if(count($data)<=0){
            $data_insert = [
                'id'    => 6,
                 'nama' => 'BAA', 
                  ];
            UserLevel::create($data_insert);
        }



        
    }

}