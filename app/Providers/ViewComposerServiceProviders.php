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
