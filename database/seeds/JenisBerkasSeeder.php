<?php

use App\Models\Ref\JenisBerkas;

use Illuminate\Database\Seeder;
 
class JenisBerkasSeeder extends Seeder {

    public function run(){

        $data = JenisBerkas::find(1);
        $data_insert= ['id' => 1, 'nama' => 'ijazah'];
        if(count($data)<=0) JenisBerkas::create($data_insert);

        $data = JenisBerkas::find(2);
        $data_insert= ['id' => 2, 'nama' => 'surat keterangan lulus'];
        if(count($data)<=0) JenisBerkas::create($data_insert);


 

    }

    

}