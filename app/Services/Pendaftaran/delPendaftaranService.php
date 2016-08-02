<?php 

namespace App\Services\Pendaftaran;

use App\Models\Mst\Berkas;
use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Photo;
use App\Models\Mst\User;


class delPendaftaranService
{


	public function handle()
	{
        //hapus pendaftar
        $p = Pendaftaran::find(\Input::get('id'));
        if (count($p)>0) {

            //hapus foto
            $foto = Photo::where('mst_pendaftaran_id', '=', $p->id)->first();
            if (count($foto)>0) {
                //hapus foto
                $path_to_foto = public_path('upload/foto/'.$foto->nama_file_tersimpan);
                if (file_exists($path_to_foto)) {
                    unlink($path_to_foto);
                }
                $foto->delete();
            }
            //end of hapus foto


            // hapus berkas
            $berkas = Berkas::where('mst_pendaftaran_id', '=', $p->id)->get();
            foreach ($berkas as $list) {
                if ($list->ref_jenis_berkas_id == 1) {
                    $path_to_berkas = public_path('upload/berkas/ijazah/'.$list->nama_file_asli);
                } else {
                    $path_to_berkas = public_path('upload/berkas/surat_keterangan_lulus/'.$list->nama_file_asli);
                }
                if (file_exists($path_to_berkas)) {
                    unlink($path_to_berkas);
                }
                $list->delete();
            }
            //end hapus berkas


            //hapus user
            $user = User::where('email', '=', $p->alamat_email)->first();
            if (count($user)>0) {
                $user->delete();
            }
            //end of hapus user
        }
        $p->delete();
            //end of hapus pendaftar		
        return 'ok';		
	}

}