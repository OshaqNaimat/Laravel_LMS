<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use App\Models\TenantUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardApiController extends Controller
{
    /**
     * Get dashboard statistics
     */
    public function getStats()
    {
        $totalAdmins = TenantUser::where('role', 'admin')->where('is_active', true)->count();
        $activeStudents = TenantUser::where('role', 'student')->where('is_active', true)->count();
        $totalSchools = Tenant::count();
        $activeSchools = Tenant::where('status', 'Active')->count();

        $monthlyRevenue = 0;
        $systemLoad = rand(30, 70) . '%';

        return response()->json([
            'totalAdmins' => $totalAdmins,
            'activeStudents' => number_format($activeStudents),
            'monthlyRevenue' => number_format($monthlyRevenue),
            'systemLoad' => $systemLoad,
            'totalSchools' => $totalSchools,
            'activeSchools' => $activeSchools,
        ]);
    }

    /**
     * Get list of tenants with pagination
     */
    public function getTenants(Request $request)
    {
        $page = $request->get('page', 1);

        $tenants = Tenant::with('users')
            ->latest()
            ->paginate(10, ['*'], 'page', $page);

        $tenantData = $tenants->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'slug' => $item->slug,
                'status' => $item->status,
                'primaryContact' => $item->users->first()?->email ?? 'N/A',
                'statusClass' => $item->status === 'Active'
                    ? 'bg-emerald-100 text-emerald-800'
                    : 'bg-slate-100 text-slate-600',
            ];
        });

        return response()->json([
            'data' => $tenantData,
            'pagination' => [
                'currentPage' => $tenants->currentPage(),
                'lastPage' => $tenants->lastPage(),
                'total' => $tenants->total(),
                'perPage' => $tenants->perPage(),
                'from' => $tenants->firstItem() ?? 0,
                'to' => $tenants->lastItem() ?? 0,
            ],
        ]);
    }

    /**
     * Get single tenant details
     */
    public function getTenant($id)
    {
        $tenant = Tenant::with('users')->find($id);

        if (!$tenant) {
            return response()->json(['error' => 'School not found'], 404);
        }

        return response()->json([
            'id' => $tenant->id,
            'name' => $tenant->name,
            'slug' => $tenant->slug,
            'status' => $tenant->status,
            'totalUsers' => $tenant->users->count(),
            'activeUsers' => $tenant->users->where('is_active', true)->count(),
            'admin' => [
                'name' => $tenant->admin()?->name ?? 'N/A',
                'email' => $tenant->admin()?->email ?? 'N/A',
                'lastLogin' => $tenant->admin()?->last_login_at?->diffForHumans() ?? 'Never',
            ],
        ]);
    }

    /**
     * Create new tenant
     */
    public function createTenant(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255|unique:tenants,name',
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|email|unique:tenant_users,email',
            'password' => 'required|string|min:8',
        ]);

        try {
            DB::beginTransaction();

            $slug = Str::slug($validated['company_name']);

            $tenant = Tenant::create([
                'name' => $validated['company_name'],
                'slug' => $slug,
                'status' => 'Active',
                'database_name' => 'tenant_' . Str::random(10),
                'connection_name' => 'tenant_db',
            ]);

            $tenantUser = TenantUser::create([
                'tenant_id' => $tenant->id,
                'name' => $validated['admin_name'],
                'email' => $validated['admin_email'],
                'password' => Hash::make($validated['password']),
                'role' => 'admin',
                'is_active' => true,
                'email_verified_at' => now(),
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => "School '{$validated['company_name']}' created successfully!",
                'school' => [
                    'id' => $tenant->id,
                    'name' => $tenant->name,
                    'slug' => $tenant->slug,
                    'status' => $tenant->status,
                    'primaryContact' => $tenantUser->email,
                ],
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Failed to create school: ' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update tenant status
     */
    public function updateTenantStatus($id, Request $request)
    {
        $tenant = Tenant::find($id);

        if (!$tenant) {
            return response()->json(['error' => 'School not found'], 404);
        }

        $validated = $request->validate([
            'status' => 'required|in:Active,Inactive,Suspended',
        ]);

        $tenant->update(['status' => $validated['status']]);

        if ($validated['status'] !== 'Active') {
            $tenant->users()->update(['is_active' => false]);
        }

        return response()->json([
            'success' => true,
            'message' => "Status updated to {$validated['status']}",
            'status' => $tenant->status,
        ]);
    }

    /**
     * Delete tenant
     */
    public function deleteTenant($id)
    {
        $tenant = Tenant::find($id);

        if (!$tenant) {
            return response()->json(['error' => 'School not found'], 404);
        }

        try {
            DB::beginTransaction();

            $tenantName = $tenant->name;
            $tenant->users()->delete();
            $tenant->delete();

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => "School '{$tenantName}' deleted successfully!",
            ]);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Failed to delete school: ' . $e->getMessage(),
            ], 500);
        }
    }
}
