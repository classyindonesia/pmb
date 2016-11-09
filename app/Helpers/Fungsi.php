<?php namespace App\Helpers;

class Fungsi
{

    public static function hari()
    {
        $input=date('D');
        if($input=='Sun'){$output='Minggu';}
        if($input=='Mon'){$output='Senin';}
        if($input=='Tue'){$output='Selasa';}
        if($input=='Wed'){$output='Rabu';}
        if($input=='Thu'){$output='Kamis';}
        if($input=='Fri'){$output='Jumat';}
        if($input=='Sat'){$output='Sabtu';}
        return $output;
    }

    public static function selisih_hari($tgl_1, $tgl_2)
    { //format input yyyy-mm-dd
        $pecah_1 = explode("-", $tgl_1);
        $date_1 = (int) $pecah_1[2];
        $month_1 = (int) $pecah_1[1];
        $year_1 = (int) $pecah_1[0];
        $pecah_2 = explode("-", $tgl_2);
        $date_2 = (int) $pecah_2[2];
        $month_2 = (int) $pecah_2[1];
        $year_2 = (int) $pecah_2[0];
        $jd_1 = GregorianToJD($month_1, $date_1, $year_1);
        $jd_2 = GregorianToJD($month_2, $date_2, $year_2);
        $selisih = $jd_2 - $jd_1;
        return $selisih;
    }


    public static function filter($val = null)
    {
        // $str = addslashes();
    $str = str_replace(['\r', '\n'], '',  $val);
        $o = explode(" ", $str);
        $jml = count($o) -1;
        for ($i=0;$i<=$jml;$i++) {
            $o[$i] = trim($o[$i]);
        }
        $str = implode(" ", $o);
        return \HTML::entities($str);
    }


  
    public static function restyle_text($input)
    {
        $suffixes = array('', 'k', 'm', 'g', 't');
        $suffixIndex = 0;

        while (abs($input) >= 1000 && $suffixIndex < sizeof($suffixes)) {
            $suffixIndex++;
            $input /= 1000;
        }
        $angka =  $input > 0
            // precision of 3 decimal places
            ? floor($input * 1000) / 1000
            : ceil($input * 1000) / 1000;
        return (
      str_limit($angka, 4, $end='')
        )
        . $suffixes[$suffixIndex];
    }
    public static function size($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }


    public static function limit_karakter($str)
    {
        if (strlen($str) >=35) {
            $pecah_str = explode(".", $str);
            $ekstensi =  $pecah_str[count($pecah_str) - 1];
            $output = substr($str, 0, 35).'.'.$ekstensi;
        } else {
            $output = $str;
        }
        return $output;
    }


    public static function get_dropdown($model, $nama_dropdown = null)
    {
        $data = array('' => '-pilih '.$nama_dropdown."-");
        foreach ($model as $list) {
            if (!empty($list->nama)) {
                $data[$list->id] = $list->nama;
            } else {
                $data[$list->id] = $list->judul;
            }
        }
            
        return $data;
    }


    public static function rupiah($nilaiUang)
    {
        $nilaiRupiah  = "";
        $jumlahAngka  = strlen($nilaiUang);
        while ($jumlahAngka > 3) {
            $nilaiRupiah = "." . substr($nilaiUang, -3) . $nilaiRupiah;
            $sisaNilai = strlen($nilaiUang) - 3;
            $nilaiUang = substr($nilaiUang, 0, $sisaNilai);
            $jumlahAngka = strlen($nilaiUang);
        }

        $nilaiRupiah = "Rp " . $nilaiUang . $nilaiRupiah . ",-";
        return $nilaiRupiah;
    }


    public static function date_to_tgl($in)
    {
        $tgl = substr($in, 8, 2);
        $bln = substr($in, 5, 2);
        $thn = substr($in, 0, 4);
        if (checkdate($bln, $tgl, $thn)) {
            $out=substr($in, 8, 2)." ".  Fungsi::bulan2(substr($in, 5, 2))." ".substr($in, 0, 4);
        } else {
            $out = "<span class='error'>N/A</span>";
        }
        return $out;
    }

    public static function bulan2($rrr)
    {
        if ($rrr=='1' || $rrr=='01') {
            $ttt='Januari';
        }
        if ($rrr=='2' || $rrr=='02') {
            $ttt='Februari';
        }
        if ($rrr=='3' || $rrr=='03') {
            $ttt='Maret';
        }
        if ($rrr=='4' || $rrr=='04') {
            $ttt='April';
        }
        if ($rrr=='5' || $rrr=='05') {
            $ttt='Mei';
        }
        if ($rrr=='6' || $rrr=='06') {
            $ttt='Juni';
        }
        if ($rrr=='7' || $rrr=='07') {
            $ttt='Juli';
        }
        if ($rrr=='8' || $rrr=='08') {
            $ttt='Agustus';
        }
        if ($rrr=='9' || $rrr=='09') {
            $ttt='September';
        }
        if ($rrr=='10') {
            $ttt='Oktober';
        }
        if ($rrr=='11') {
            $ttt='November';
        }
        if ($rrr=='12') {
            $ttt='Desember';
        }
        return $ttt;
    }
     
  
    public static function umur($tgl_lahir)
    { // format = YYYY-mm-dd
      //  string substr ( string $string , int $start [, int $length ] )
      $thn1 = substr($tgl_lahir, 0, 4);
        $bln1 = substr($tgl_lahir, 5, 2);
        $tgl1 = substr($tgl_lahir, 8, 2);

        $thn_now = date('Y').'-08'.'-01'; // per 31 agustus date('Y')
      $thn2 = substr($thn_now, 0, 4);
        $bln2 = substr($thn_now, 5, 2);
        $tgl2 = substr($thn_now, 8, 2);

        $ge1 = gregoriantojd($bln1, $tgl1, $thn1);
        $ge2 = gregoriantojd($bln2, $tgl2, $thn2);
        $selisih_hari = abs($ge1 - $ge2);
        return substr($selisih_hari / 365, 0, 2);
    }
}
