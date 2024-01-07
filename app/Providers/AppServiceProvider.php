<?php

namespace App\Providers;

use App\Models\master_jenis_identitas;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        //
        view()->composer('*',function($view) {
            $view->with('jenis_identitas', master_jenis_identitas::all());
        });
    }
}
