<?php
use App\Models\SetupVariable as mSV;

use Illuminate\Database\Seeder;
 
class SetupVariableSeeder extends Seeder {

    public function run(){

        $data = mSV::where('variable', 'navbar_bg_color')->first();
        $data_insert= ['variable' => 'navbar_bg_color', 'value' => '5EFFFF', 'keterangan' => 'background color di navbar'];
        if(count($data)<=0) mSV::create($data_insert);
    }

    

}