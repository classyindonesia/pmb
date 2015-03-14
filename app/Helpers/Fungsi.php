<?php namespace App\Helpers;

class Fungsi{


        public static function get_dropdown($model, $nama_dropdown = NULL){
            $data = array('' => '-pilih '.$nama_dropdown."-");
            foreach($model as $list){
                if(!empty($list->nama)){
                $data[$list->id] = $list->nama;
                }else{
                 $data[$list->id] = $list->judul;   
                }
            }
            
            return $data;
        }




}