<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\ProvinceController;
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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('/', AdminController::class);
    Route::resource('culture', CultureController::class);
    Route::resource('province', ProvinceController::class);
    Route::resource('category', CategoryContoller::class);
});
