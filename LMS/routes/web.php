<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// main admin routes
Route::view('/MA_Dashboard','Main-admin.MA-Dashboard');
Route::view('/MA_School-admins','Main-admin.MA-school-admin');
Route::view('/MA_Subscriptions','Main-admin.MA-Subscription');
Route::view('/MA_platform-admins','Main-admin.MA-platform-admins');
Route::view('/MA_global-settings','Main-admin.MA-global-settings');

// admin / tenant routes
Route::view('/Tenant-dashboard','Tenant.admin-dashboard');
Route::view('/Tenant-Faculty-management','Tenant.Faculty-management');
Route::view('/Tenant-Student-Registry','Tenant.Student-registry');
