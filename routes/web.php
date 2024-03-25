<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\UserDashboard;
use App\Livewire\AdminDashboard;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/counter', Counter::class);
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/home',[HomeController::class,'index']);

// Route::middleware(['admin'])->group(function () {
//     // User routes
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');

//     // Admin routes
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    
// });
