<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class ViewComposerServiceProviders extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(){
       View::composer('layouts.komponen.frontend.footer', 'App\Http\ViewComposers\Frontend\FooterComposer@compose');
       View::composer('layouts.komponen.frontend.foto_slide', 'App\Http\ViewComposers\Frontend\FotoSlideComposer@compose');
       View::composer('layouts.komponen.frontend.lampiran_berita', 'App\Http\ViewComposers\Frontend\LampiranBeritaComposer@compose');
       View::composer('layouts.komponen.frontend.statistik_pengunjung', 'App\Http\ViewComposers\Frontend\StatistikComposer@compose');
       View::composer('konten.frontend.auth.login', 'App\Http\ViewComposers\Frontend\LoginComposer@compose');
       View::composer('layouts.komponen.frontend.nav_atas', 'App\Http\ViewComposers\Frontend\NavAtasComposer@compose');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
