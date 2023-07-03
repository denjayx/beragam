<?php

use App\Models\Budaya;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProvinsiController;
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
    $title = "Home";
    return view('home', compact('title'));
});
Route::get('/admin', function () {
    $title = "Dashboard";
    $budayas = Budaya::All();
    return view('/admin/index', compact('title', 'budayas'));
});
Route::resource('/admin/budaya', BudayaController::class);
Route::resource('/admin/provinsi', ProvinsiController::class);
Route::resource('/admin/kategori', KategoriController::class);
