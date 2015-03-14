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


    public static function rupiah($nilaiUang){
      $nilaiRupiah  = "";
      $jumlahAngka  = strlen($nilaiUang);
      while($jumlahAngka > 3){
        $nilaiRupiah = "." . substr($nilaiUang,-3) . $nilaiRupiah;
        $sisaNilai = strlen($nilaiUang) - 3;
        $nilaiUang = substr($nilaiUang,0,$sisaNilai);
        $jumlahAngka = strlen($nilaiUang);
      }

      $nilaiRupiah = "Rp " . $nilaiUang . $nilaiRupiah . ",-";
      return $nilaiRupiah;
    }




}