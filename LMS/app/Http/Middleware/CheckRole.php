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
    // 1. Ensure the user is actually logged in
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // 2. Safeguard: If the user's role doesn't match the required group, force a clean split
    if (!in_array($request->user()->role, $roles)) {

        // If they are trying to access a guest/wrong area, bounce them appropriately
        if ($request->user()->role === 'super_admin') {
            return redirect()->route('super.admin.dashboard');
        }

        // Default protection block
        abort(403, 'Unauthorized action.');
    }

    return $next($request);
}
}
