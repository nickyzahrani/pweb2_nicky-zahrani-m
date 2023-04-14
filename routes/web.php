<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/form', [DashboardController::class, 'Form'])->name('form');
// Route::get('/table', [DashboardController::class, 'Table'])->name('table');
Route::get('/table', [SewaController::class, 'index'])->name('index');
Route::get('/lihat', [SewaController::class, 'index2'])->name('index2');
Route::get('/tambah-data', [SewaController::class, 'tambahdata'])->name('tambahdata');
Route::post('/table', [SewaController::class, 'insertdata'])->name('insertdata');
Route::post('/data/{{id}}/edit', [SewaController::class, 'edit'])->name('edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::delete('/sewa/{id}', [SewaController::class, 'destroy']);
require __DIR__.'/auth.php';
