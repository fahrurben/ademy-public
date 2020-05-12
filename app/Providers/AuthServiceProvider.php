<?php

namespace App\Providers;

use App\Policies\CommonPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-universitas', 'App\Policies\CommonPolicy@manageUniversitas');
        Gate::define('manage-mahasiswa', 'App\Policies\CommonPolicy@manageMahasiwa');
    }
}
