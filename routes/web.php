<?php

use App\Http\Controllers\Page\Master\PageWargaController;
use App\Http\Controllers\Page\Master\PerumahanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\Auth\Login;
use App\Http\Controllers\Page\Dashboard\Dashboard;
use GuzzleHttp\Psr7\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([CheckAccess::class])->group(function () {
Route::get('/', [Login::class, 'login']);
Route::get('/dashboard', [Dashboard::class, 'dashboard']);

Route::get('/warga', [PageWargaController::class, 'index'])->name('warga');
Route::get('/perumahan', [PerumahanController::class, 'index'])->name('perumahan');
Route::get('/perumahan/create', [PerumahanController::class, 'create'])->name('perumahan.create');
Route::post('/perumahan/store', [PerumahanController::class, 'store'])->name('perumahan.store');
// });
