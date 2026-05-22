<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuperAdminDashboardController;
use Illuminate\Support\Facades\Route;

// ==========================================
// PUBLIC ROOT / GUEST ROUTES
// ==========================================
Route::middleware('guest')->group(function () {
    // Both render your welcome/login layout directly at http://127.0.0.1:8000/
    Route::get('/', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

// ==========================================
// SECURE AUTHENTICATED ENVIRONMENT PROTECTIONS
// ==========================================
Route::middleware(['auth'])->group(function () {

    // Global Post Logout execution route trigger
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // 1. Central Super Admin Space
    // routes/web.php

// 1. Central Super Admin Environment Routes
Route::middleware(['role:super_admin'])->prefix('super-admin')->name('super.admin.')->group(function () {
    Route::get('/MA_Dashboard', [SuperAdminDashboardController::class, 'index'])->name('dashboard');

    // ADD THIS LINE: This will define the missing 'super.admin.tenants.store' route
    Route::post('/tenants', [SuperAdminDashboardController::class, 'storeTenant'])->name('tenants.store');

    Route::view('/MA_School-admins', 'Main-admin.MA-school-admin')->name('school.admins');
    Route::view('/MA_Subscriptions', 'Main-admin.MA-Subscription')->name('subscriptions');
    Route::view('/MA_platform-admins', 'Main-admin.MA-platform-admins')->name('platform.admins');
    Route::view('/MA_global-settings', 'Main-admin.MA-global-settings')->name('global.settings');
});

    // 2. Tenant Admin School Space
    Route::middleware(['role:tenant_admin'])->prefix('tenant')->name('tenant.')->group(function () {
        Route::view('/dashboard', 'Tenant.admin-dashboard')->name('dashboard');
        Route::view('/faculty-management', 'Tenant.Faculty-management')->name('faculty.management');
        Route::view('/student-registry', 'Tenant.Student-registry')->name('student.registry');
        Route::view('/classes-timetables', 'Tenant.Classes&Timetables')->name('timetable');
        Route::view('/attendance-rate', 'Tenant.Attendence')->name('attendance');
        Route::view('/fees', 'Tenant.Fees')->name('fees');
    });

    // 3. Teacher Dashboard Area
    Route::middleware(['role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
        Route::view('/dashboard', 'Tenant.teacher-dashboard')->name('dashboard');
        Route::view('/attendance', 'Tenant.teacher-attendence')->name('attendance');
        Route::view('/timetable', 'Tenant.teacher-timetable')->name('timetable');
    });

    // 4. Student Personal Portal Area
    Route::middleware(['role:student'])->prefix('student')->name('student.')->group(function () {
        Route::view('/dashboard', 'Tenant.student-dashboard')->name('dashboard');
        Route::view('/timetable', 'Tenant.student-timetable')->name('timetable');
        Route::view('/assignments', 'Tenant.student-assignments')->name('assignments');
        Route::view('/report-card', 'Tenant.student-grades')->name('grades');
    });

});
