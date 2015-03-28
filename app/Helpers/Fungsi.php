<?php namespace App\Helpers;

class Fungsi{


  
public static function restyle_text($input){
    $suffixes = array('', 'k', 'm', 'g', 't');
    $suffixIndex = 0;

    while(abs($input) >= 1000 && $suffixIndex < sizeof($suffixes))
    {
        $suffixIndex++;
        $input /= 1000;
    }

    return (
        $input > 0
            // precision of 3 decimal places
            ? floor($input * 1000) / 1000
            : ceil($input * 1000) / 1000
        )
        . $suffixes[$suffixIndex];
}
        public static function size($bytes){
                if ($bytes >= 1073741824)
                {
                    $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                }
                elseif ($bytes >= 1048576)
                {
                    $bytes = number_format($bytes / 1048576, 2) . ' MB';
                }
                elseif ($bytes >= 1024)
                {
                    $bytes = number_format($bytes / 1024, 2) . ' KB';
                }
                elseif ($bytes > 1)
                {
                    $bytes = $bytes . ' bytes';
                }
                elseif ($bytes == 1)
                {
                    $bytes = $bytes . ' byte';
                }
                else
                {
                    $bytes = '0 bytes';
                }

                return $bytes;
        }


  public static function limit_karakter($str){
    if(strlen($str) >=35 ){
      $pecah_str = explode(".", $str);
      $ekstensi =  $pecah_str[count($pecah_str) - 1];
      $output = substr($str, 0, 35).'.'.$ekstensi;
    }else{
      $output = $str;
    }
    return $output;
  }


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