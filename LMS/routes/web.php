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
Route::view('/Tenant-Classes-Timetables','Tenant.Classes&Timetables');
Route::view('/Tenant-Attendence-Rate','Tenant.Attendence');
Route::view('/Tenant-Fees','Tenant.Fees');

// teacher routes
Route::view('/teacher_dashboard','Tenant.teacher-dashboard');
Route::view('/teacher_attendence','Tenant.teacher-attendence');
Route::view('/teacher_timetable','Tenant.teacher-timetable');
