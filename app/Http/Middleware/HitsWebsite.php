<?php namespace App\Http\Middleware;

use App\Jobs\HitsWebsiteCommand;
use Closure;
use Illuminate\Foundation\Bus\DispatchesJobs;

class HitsWebsite
{


    //jalankan trait dispatch
    use DispatchesJobs;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->dispatch(new HitsWebsiteCommand($request->getClientIp(), csrf_token()));

        return $next($request);
    }
}
