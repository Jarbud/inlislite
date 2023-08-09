<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // mahasiswa = 1, umum = 2, admin = 3, tamu = 4
        $this->register();

        Gate::define('admin', function ($user) {
            if ($user->jenis_anggota_id == '3') {
                return true;
            }
            return false;
        });

        Gate::define('user-biasa', function ($user) {
            if ($user->jenis_anggota_id == '1' or $user->jenis_anggota_id == '2' or $user->jenis_anggota_id == '4') {
                return true;
            }
            return false;
        });
    }
}
