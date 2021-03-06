<?php namespace App\Http\Controllers\Backend\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Mst\SlideUtama;
use Illuminate\Http\Request;
use Fungsi;
use Auth;

class FotoSlideUtamaController extends Controller
{


    private $base_view = 'konten.backend.foto_slide_utama.';

    public function __construct()
    {
        view()->share('base_view', $this->base_view);
        view()->share('foto_slide_utama_home', true);
    }


    public function index()
    {
        $foto = SlideUtama::with('mst_user')->orderBy('id', 'DESC')->paginate(6);
        return view($this->base_view.'index', compact('foto'));
    }

    public function upload_foto()
    {
        $max = explode('M', ini_get("upload_max_filesize"));
        $max_upload = $max[0] * 1048576;
        return view($this->base_view.'popup.upload_foto', compact('max_upload'));
    }


    public function do_upload_gambar()
    {
        $results = array();
        foreach (\Request::file('files') as $file) {
            try {
                $assetPath = '/upload/gambar_slide_utama';
                $uploadPath = public_path($assetPath);

                $name = $file->getClientOriginalName();
                $name = Fungsi::limit_karakter($name);
                $nama_file_db = str_slug($name, '.');
                $nama_file_to_server = md5($nama_file_db).'_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
                $file->move($uploadPath, $nama_file_to_server);
                $name = $file->getClientOriginalName().' telah tersimpan! ';
 
                $data_insert = [
                            'nama_file_asli'        => $nama_file_to_server,
                            'mst_user_id'            => Auth::user()->id
                        ];
                SlideUtama::create($data_insert);


                        // resize gambar
                        $img = \Image::make(public_path('upload/gambar_slide_utama/'.$nama_file_to_server));
                        // prevent possible upsizing
                        $img->resize(null, 600, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });
                $img->save();
            } catch (Exception $e) {
                $name = $file->getClientOriginalName().' gagal tersimpan!';
                        //$results[] = compact('name');   
            }
            $results[] = compact('name');
        }
        return array(
            'files' => $results,
        );
    }


    public function del(Request $request)
    {
        $o = SlideUtama::findOrFail($request->id);
        $path_to_file = public_path('upload/gambar_slide_utama/'.$o->nama_file_asli);
        if (file_exists($path_to_file)) {
            unlink($path_to_file);
        }
        $o->delete();
        return 'ok';
    }

    public function add_url($id)
    {
        $slide = SlideUtama::find($id);
        return view($this->base_view.'popup.add_url', compact('slide'));
    }

    public function insert_url(Request $request)
    {
        $this->validate($request,[
            'url' => 'url'
        ]);

        $s = SlideUtama::find($request->id);
        if(count($s)>0){
            $s->url = $request->url;
            $s->save();
        }
        return 'ok';
    }
}
