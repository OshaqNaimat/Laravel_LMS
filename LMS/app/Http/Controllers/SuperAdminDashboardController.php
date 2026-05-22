<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminDashboardController extends Controller
{
    public function index()
    {
        // 1. Dynamic Metric Calculations
        $totalAdmins = User::where('role', 'tenant_admin')->count();
        $activeStudents = User::where('role', 'student')->count();
        $totalSchoolsCount = Tenant::count();

        // Mock revenue/load metrics or map to your active billing/server tracking structures
        $monthlyRevenue = $totalSchoolsCount * 150;
        $systemLoad = "1.2%";

        // 2. Fetch Paginated Recent Platforms
        $tenants = Tenant::with(['users' => function($query) {
            $query->where('role', 'tenant_admin');
        }])->orderBy('created_at', 'desc')->paginate(5);

       //  FIXED: Points exactly to resources/views/Main-admin/MA-Dashboard.blade.php
return view('Main-admin.MA-Dashboard', compact(
    'totalAdmins',
    'activeStudents',
    'monthlyRevenue',
    'systemLoad',
    'tenants'
));
    }

    public function store(Request $request)
    {
        // Validate payload parameters
        $request->validate([
            'company_name' => 'required|string|max:255|unique:tenants,name',
            'admin_name'   => 'required|string|max:255',
            'admin_email'  => 'required|email|unique:users,email',
            'password'     => 'required|string|min:8',
        ]);

        // 1. Create the School Tenant Node Entry
        $tenant = Tenant::create([
            'name' => $request->company_name,
            'slug' => Str::slug($request->company_name),
            'status' => 'Active'
        ]);

        // 2. Create the Associated Tenant Master Admin Credentials
        User::create([
            'tenant_id' => $tenant->id,
            'name'      => $request->admin_name,
            'email'     => $request->admin_email,
            'password'  => Hash::make($request->password),
            'role'      => 'tenant_admin',
        ]);

        return redirect()->route('super.admin.dashboard')->with('success', 'New School platform node deployed completely!');
    }
    public function storeTenant(Request $request)
{
    // 1. Validate the form inputs coming from your modal/form
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255', 'unique:tenants,name'],
    ]);

    // 2. Automatically generate a unique URL slug from the school name
    $slug = Str::slug($validated['name']);

    // 3. Create the tenant record in the database
    Tenant::create([
        'name' => $validated['name'],
        'slug' => $slug,
        'status' => 'Active', // Default status value set in your migration
    ]);

    // 4. Redirect back to the dashboard with a success banner alert status
    return back()->with('success', 'New institutional school tenant registered successfully!');
}
}
