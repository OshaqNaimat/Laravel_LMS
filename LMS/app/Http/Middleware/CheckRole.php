<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  ...$roles
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // 1. Check if user is authenticated
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // 2. Check if user's role matches required roles
        $userRole = $request->user()->role ?? null;

        if (!in_array($userRole, $roles)) {
            // Redirect based on user's actual role
            if ($userRole === 'super_admin') {
                return redirect()->route('super.admin.dashboard');
            } elseif ($userRole === 'tenant_admin') {
                return redirect()->route('tenant.dashboard');
            } elseif ($userRole === 'teacher') {
                return redirect()->route('teacher.dashboard');
            } elseif ($userRole === 'student') {
                return redirect()->route('student.dashboard');
            }

            // Default: Unauthorized
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
