<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardMemberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    // Route Group for Administrator
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('administrator.dashboard');
});

Route::prefix('member')->middleware(['auth', 'auth.member'])->group(function () {
    // Route Group for Member
    Route::get('dashboard', [DashboardMemberController::class, 'index'])->name('member.dashboard');
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});