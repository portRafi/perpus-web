<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardUser;


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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', [DashboardUser::class, 'Dashboardpage'])->name('dashboard');
Route::get('/login', [LoginUser::class, 'LoginPage'])->name('login');
Route::get('/landingpage', [landingpage::class, 'landingpageuser'])->name('landingpage');
