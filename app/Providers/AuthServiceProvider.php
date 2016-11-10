<?php

namespace App\Providers;

use App\Models\Mst\Biodata;
use App\Models\Mst\Menu2;
use App\Policies\IsianPendaftaranCamabaPolicy;
use App\Policies\Menu2Policy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Biodata::class => IsianPendaftaranCamabaPolicy::class,
        Menu2::class => Menu2Policy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}