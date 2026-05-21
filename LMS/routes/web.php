<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/MA_School-admins','MA-school-admin');
Route::view('/MA_Subscriptions','MA-Subscription');
Route::view('/MA_platform-admins','MA-platform-admins');
Route::view('/MA_global-settings','MA-global-settings');
