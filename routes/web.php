<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', [DashboardController::class, 'create'])->name('dashboard-create');
    Route::post('/store', [ProductController::class, 'create'])->name('post-store');
    Route::get('/{product}/edit', [DashboardController::class, 'edit'])->name('dashboard-edit');
    Route::patch('/edit/{product}', [ProductController::class, 'edit'])->name('post-edit');
    Route::delete('/{product}/delete', [ProductController::class, 'delete'])->name('post-delete');
});

require __DIR__.'/auth.php';
