<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;

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
        // Redirect authenticated users based on their role
        RedirectIfAuthenticated::redirectUsing(function () {
            // Get the currently authenticated user
            $user = Auth::user();

            // If user is authenticated, redirect based on role
            if ($user) {
                $role = $user->role ?? 'student';

                switch ($role) {
                    case 'super_admin':
                        return route('super.admin.dashboard');
                    case 'tenant_admin':
                        return route('tenant.dashboard');
                    case 'admin':
                        return route('tenant.dashboard');
                    case 'teacher':
                        return route('teacher.dashboard');
                    case 'student':
                        return route('student.dashboard');
                    default:
                        return route('dashboard');
                }
            }

            // If not authenticated, go to login
            return route('login');
        });
    }
}
