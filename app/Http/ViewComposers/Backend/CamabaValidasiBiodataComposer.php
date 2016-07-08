<?php namespace App\Http\ViewComposers\Backend;

use App\Models\Mst\Pendaftaran;
use App\Models\Mst\Pengumuman;
use Illuminate\Contracts\View\View;

class CamabaValidasiBiodataComposer
{


  
    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $mst_pendaftaran = Pendaftaran::whereAlamatEmail(\Auth::user()->email)->first();
        $pengumuman = Pengumuman::whereMstPendaftaranId($mst_pendaftaran->id)->first();
        $view->with('pengumuman', $pengumuman);
    }
}
