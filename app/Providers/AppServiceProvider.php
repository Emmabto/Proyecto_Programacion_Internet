<?php

namespace App\Providers;

use App\Models\Mascota;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('editar-mascota', function (User $user, Mascota $mascota) {
            return $user->id === $mascota->user_id;
        });
    }
}
