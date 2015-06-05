<?php namespace App\Http\Middleware;

use App\Commands\HitsWebsiteCommand;
use Closure;
use Illuminate\Foundation\Bus\DispatchesCommands;
class HitsWebsite {


	//jalankan trait dispatch
	use DispatchesCommands;

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next){

 		$this->dispatch(new HitsWebsiteCommand($request->getClientIp(), csrf_token()));

		return $next($request);
	}

}
