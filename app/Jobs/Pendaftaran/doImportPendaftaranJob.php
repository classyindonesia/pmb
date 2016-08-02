<?php

namespace App\Jobs\Pendaftaran;

use App\Jobs\Job;
use App\Jobs\delFileImport;
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class doImportPendaftaranJob extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    public $lokasi_file;

    public function __construct($lokasi_file)
    {
        $this->lokasi_file = $lokasi_file;
    }


    private function insert_data_pendaftaran(array $data_pendaftaran)
    {
        // check no pendaftaran
        $u = User::where('email', '=', $data_pendaftaran['alamat_email'])->first();
        if(count($u)<=0){
            // insert ke tabel mst_user
            $data_user = [
                'nama'  => $data_pendaftaran['nama'],
                'email' => $data_pendaftaran['alamat_email'],
                'password'  => $data_pendaftaran['alamat_email'],
                'ref_user_level_id' => 4
            ];
            $insert_user = User::create($data_user);
            \Log::info('insert user by import : '.$insert_user);            
        }

        // check user 
        $p = Pendaftaran::whereAlamatEmail($data_pendaftaran['alamat_email'])->first();
        if(count($p)<=0){
            // insert ke tabel mst_pendaftaran
            $insert_pendaftaran = Pendaftaran::create($data_pendaftaran);
            \Log::info('insert pendaftaran by import : '.$insert_pendaftaran);

        }
    }



    public function handle()
    {

        $data = new \Reader($this->lokasi_file);
        $a = $data->rowcount($sheet_index=0);
    
        for($i=1;$i<=$a;$i++){
            if($i > 2 && $i <= $a){
              $no1   = trim($data->val($i, 'B'));  
              $no2   = trim($data->val($i, 'C'));  
              $no3   = trim($data->val($i, 'D'));  
              $no4   = trim($data->val($i, 'E'));  
              $no5   = trim($data->val($i, 'F'));  
              $no6   = trim($data->val($i, 'G'));  
              $no7   = trim($data->val($i, 'H'));  
              $no8   = trim($data->val($i, 'I'));  
              $no9   = trim($data->val($i, 'J'));  
              $no10   = trim($data->val($i, 'K'));  
              $no11   = trim($data->val($i, 'L'));  
              $no12   = trim($data->val($i, 'M'));  
              $no13   = trim($data->val($i, 'N'));  
              $no14   = trim($data->val($i, 'O'));  
              $no15   = trim($data->val($i, 'P'));  
              $no16   = trim($data->val($i, 'Q'));  
              $no17   = trim($data->val($i, 'R'));  
              if( $no1 != null || 
                 $no2 != null || 
                 $no3 != null || 
                 $no4 != null || 
                 $no5 != null || 
                 $no6 != null || 
                 $no7 != null || 
                 $no8 != null || 
                 $no9 != null || 
                 $no10 != null || 
                 $no11 != null || 
                 $no12 != null || 
                 $no13 != null || 
                 $no14 != null || 
                 $no15 != null || 
                 $no16 != null ||
                 $no17 != null
                ){
                    $data_pendaftaran = [
                        'no_pendaftaran' => $no1,
                        'nama' => $no2,
                        'tempat_lahir' => $no3,
                        'tgl_lahir' => $no4, 
                        'alamat' => $no5,
                        'jenis_kelamin' => $no6,
                        'no_hp' => $no7,
                        'thn_lulus' => $no8,
                        'no_ijazah' => $no9,
                        'ref_sma_id' => $no10,
                        'keterangan_sma' => $no11,
                        'ref_prodi_id1' => $no12,
                        'ref_prodi_id2' => $no13,
                        'ref_gelombang_id' => $no14,
                        'jenis_daftar' => $no15,
                        'is_valid'  => 1,
                        'alamat_email' => $no16,
                        'ref_thn_ajaran_id' => $no17,
                    ];
                    $this->insert_data_pendaftaran($data_pendaftaran);

                    if($i == $a){
                        //hapus file tmp
                        \Queue::push(new delFileImport($this->lokasi_file));
                    }

                }else{
                   //jika ada kolom yg kurang
                    \Log::alert('ada kolom yg belum terisi, lokasi file : '.$this->file);
                  }
              } //if setelah for (keterangan template)

            }//for
        
    }
}
