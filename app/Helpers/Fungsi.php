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


   public static function date_to_tgl($in)
  {
  $tgl = substr($in,8,2);
  $bln = substr($in,5,2);
  $thn = substr($in,0,4);
  if(checkdate($bln,$tgl,$thn))
  {
     $out=substr($in,8,2)." ".  Fungsi::bulan2(substr($in,5,2))." ".substr($in,0,4);
  }
  else
  {
     $out = "<span class='error'>N/A</span>";
  }
  return $out;
  }   

    public static function bulan2($rrr)
  {
  if($rrr=='1' || $rrr=='01'){$ttt='Januari';}
  if($rrr=='2' || $rrr=='02'){$ttt='Februari';}
  if($rrr=='3' || $rrr=='03'){$ttt='Maret';}
  if($rrr=='4' || $rrr=='04'){$ttt='April';}
  if($rrr=='5' || $rrr=='05'){$ttt='Mei';}
  if($rrr=='6' || $rrr=='06'){$ttt='Juni';}
  if($rrr=='7' || $rrr=='07'){$ttt='Juli';}
  if($rrr=='8' || $rrr=='08'){$ttt='Agustus';}
  if($rrr=='9' || $rrr=='09'){$ttt='September';}
  if($rrr=='10'){$ttt='Oktober';}
  if($rrr=='11'){$ttt='November';}
  if($rrr=='12'){$ttt='Desember';}
  return $ttt;
  }        
     
  

}