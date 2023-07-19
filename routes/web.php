<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinceController;
use App\Models\Province;
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
    $provinces = Province::orderBy('nama', 'asc')->paginate(4);
    return view('welcome', compact('provinces'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('/', AdminController::class);
        Route::resource('culture', CultureController::class);
        Route::resource('province', ProvinceController::class);
        Route::resource('category', CategoryContoller::class);
    });
});

require __DIR__ . '/auth.php';
