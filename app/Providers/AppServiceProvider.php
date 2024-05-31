<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use App\Http\View\Composers\HeaderComposer;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrapFive();

        Gate::define('admin', function (User $user) {
            // return $user->username === 'faiqathari';
            return $user->is_admin; //jika is_admin true maka bisa pake gate
        });

        // Daftarkan view composer untuk header
        View::composer('dashboard.layouts.header', HeaderComposer::class);
    }
}
