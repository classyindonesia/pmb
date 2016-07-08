<?php namespace App\Http\Middleware;

use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Pengumuman;
use Closure;

class aksesValidasiBiodataCamaba
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //cek di tabel mst_pendaftaran
        $mst_pendaftaran = Pendaftaran::whereAlamatEmail(\Auth::user()->email)->first();

        if (count($mst_pendaftaran)>0) {
            //cek di tabel pengumuman
            $pengumuman = Pengumuman::whereMstPendaftaranId($mst_pendaftaran->id)->first();

            if (count($pengumuman)>0) {
                return $next($request);
            } else {
                return response('Akses ditolak.', 401);
            }
        } else {
            return response('Akses ditolak.', 401);
        }
    }
}
