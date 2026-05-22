<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

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
        // FIXED: Tell Laravel where authenticated users should go if they visit the root/login page
        RedirectIfAuthenticated::redirectUsing(function () {
            $user = auth()->user();

            if ($user) {
                switch ($user->role) {
                    case 'super_admin':
                        return route('super.admin.dashboard');
                    case 'tenant_admin':
                        return route('tenant.dashboard');
                    case 'teacher':
                        return route('teacher.dashboard');
                    case 'student':
                        return route('student.dashboard');
                }
            }

            return route('login');
        });
    }
}
