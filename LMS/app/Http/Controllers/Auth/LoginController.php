<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form layout view.
     */
    public function showLogin()
    {
        return view('welcome');
    }

    /**
     * Handle the incoming login form submission request.
     */
    public function login(Request $request)
    {
        // 1. Validate input requirements
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Attempt authentication verification
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            // 获取当前登录用户对象
            $user = Auth::user();

            // 3. DYNAMIC REDIRECT MATRIX BASED ON ROLE VALUE
            switch ($user->role) {
                case 'super_admin':
                    return redirect()->route('super.admin.dashboard');

                case 'tenant_admin':
                    return redirect()->route('tenant.dashboard');

                case 'teacher':
                    return redirect()->route('teacher.dashboard');

                case 'student':
                    return redirect()->route('student.dashboard');

                default:
                    // Fallback baseline if no role match matches
                    Auth::logout();
                    return redirect()->route('login')->withErrors([
                        'email' => 'Your account configuration profile role structure is missing or invalid.',
                    ]);
            }
        }

        // Return error back to login input fields if verification check completely fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our database records.',
        ])->onlyInput('email');
    }

    /**
     * Handle explicit logout operations.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
