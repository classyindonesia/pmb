<?php namespace App\Http\Controllers\Backend\Camaba\Step;

use Illuminate\Http\Request;
use Image;
use Auth;
/* models */
use App\Models\Mst\Photo;
/* repo */
use App\Repositories\Mst\PendaftaranRepository;

trait UploadFotoTrait
{

    private $base_konten_view = 'konten.backend.dashboard.camaba.popup.upload_foto.';

    public function upload_foto()
    {
        $max = explode('M', ini_get("upload_max_filesize"));
        $max_upload = $max[0] * 1048576;
        $upload_foto_home = true;
        $base_konten_view = $this->base_konten_view;
        return view($this->base_konten_view.'index',
            compact('max_upload', 'upload_foto_home', 'base_konten_view'));
    }


    public function ambil_foto_webcam()
    {
        $upload_webcam_home = true;
        $base_konten_view = $this->base_konten_view;
        return view($this->base_konten_view.'ambil_foto_webcam',
            compact('upload_webcam_home', 'base_konten_view'));
    }

    public function do_upload_webcam(Request $request, PendaftaranRepository $biodata)
    {
        $assetPath = '/upload/foto';
        $uploadPath = public_path($assetPath);
        $file =  $request->file('webcam');
        $results = [];

         //move_uploaded_file($_FILES['webcam']['tmp_name'], 'webcam.jpg');
        try {
            $nama_file = md5(Auth::user()->email).'.jpg';
            $file->move($uploadPath, $nama_file);
            $img = Image::make($uploadPath.'/'.$nama_file);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($uploadPath.'/'.$nama_file);
            $name = $file->getClientOriginalName().' telah tersimpan! ';

            /* insert data ke db */
            $b = $biodata->getByEmail(Auth::user()->email);
            $check_foto = Photo::where('mst_pendaftaran_id', '=', $b->id)->first();
            if (count($check_foto)<=0) {
                $f = new Photo;
                $f->nama_file_tersimpan = $nama_file;
                $f->mst_pendaftaran_id = $b->id;
                $f->save();
            }
        } catch (Exception $e) {
            $name = $file->getClientOriginalName().' gagal tersimpan!';
            $results[] = compact('name');
        }
        return array(
            'files' => $results,
        );
    }




    public function do_upload_foto(Request $request, PendaftaranRepository $biodata)
    {
        $assetPath = '/upload/foto';
        $uploadPath = public_path($assetPath);
        $file =  $request->file('files');
        $results = [];

        try {
            $nama_file = md5(Auth::user()->email).'.jpg';
            $file->move($uploadPath, $nama_file);
            $img = Image::make($uploadPath.'/'.$nama_file);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($uploadPath.'/'.$nama_file);
            $name = $file->getClientOriginalName().' telah tersimpan! ';

            /* insert data ke db */
            $b = $biodata->getByEmail(Auth::user()->email);
            $check_foto = Photo::where('mst_pendaftaran_id', '=', $b->id)->first();
            if (count($check_foto)<=0) {
                $f = new Photo;
                $f->nama_file_tersimpan = $nama_file;
                $f->mst_pendaftaran_id = $b->id;
                $f->save();
            }
        } catch (Exception $e) {
            $name = $file->getClientOriginalName().' gagal tersimpan!';
            $results[] = compact('name');
        }
        $results[] = compact('name');
        return array(
            'files' => $results,
        );
    }
}
