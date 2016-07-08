<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        'App\Http\Middleware\HitsWebsite',
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'                        => 'App\Http\Middleware\Authenticate',
        'auth.basic'                => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest'                    => 'App\Http\Middleware\RedirectIfAuthenticated',
        'csrf'                        => 'App\Http\Middleware\VerifyCsrfToken',
        'hanya_admin'                => 'App\Http\Middleware\AdminAkses',
        'hanya_operator'            => 'App\Http\Middleware\OperatorAkses',
        'hanya_camaba'                => 'App\Http\Middleware\CamabaAkses',
        'hanya_web'                    => 'App\Http\Middleware\WebAkses',
        'hanya_baa'                    => 'App\Http\Middleware\BaaAkses',
        'validasi_biodata_camaba'    => 'App\Http\Middleware\aksesValidasiBiodataCamaba',
        'admin_baa'                    => 'App\Http\Middleware\aksesAdminDanBaa',

    ];
}
