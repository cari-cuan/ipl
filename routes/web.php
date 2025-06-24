<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Page\Master\ResidentialAreaController;
use App\Http\Controllers\Page\Master\ResidentController;
use App\Http\Controllers\Page\Master\HousingUnitController;
use App\Http\Controllers\Page\Master\PaymentTypeController;
use App\Http\Controllers\Page\Master\ResidentPaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\Auth\Login;
use App\Http\Controllers\Page\Dashboard\Dashboard;
use GuzzleHttp\Psr7\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([CheckAccess::class])->group(function () {
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/login', [Login::class, 'login']);
Route::get('/dashboard', [Dashboard::class, 'dashboard']);

Route::controller(ResidentialAreaController::class)
    ->prefix('residential-areas')
    ->name('residential-areas')
    ->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::post('/', 'store')->name('.store');
        Route::get('/{id}/edit', 'edit')->name('.edit');
        Route::put('/{id}', 'update')->name('.update');
        Route::delete('/{id}', 'destroy')->name('.destroy');
    });

Route::controller(ResidentController::class)
    ->prefix('resident')
    ->name('resident')
    ->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::post('/', 'store')->name('.store');
        Route::get('/{id}/edit', 'edit')->name('.edit');
        Route::put('/{id}', 'update')->name('.update');
        Route::delete('/{id}', 'destroy')->name('.destroy');
    });

Route::controller(HousingUnitController::class)
    ->prefix('housing-units')
    ->name('housing-units')
    ->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::post('/', 'store')->name('.store');
        Route::get('/{id}/edit', 'edit')->name('.edit');
        Route::put('/{id}', 'update')->name('.update');
        Route::delete('/{id}', 'destroy')->name('.destroy');
    });

Route::controller(PaymentTypeController::class)
    ->prefix('payment-types')
    ->name('payment-types')
    ->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::post('/', 'store')->name('.store');
        Route::get('/{id}/edit', 'edit')->name('.edit');
        Route::put('/{id}', 'update')->name('.update');
        Route::delete('/{id}', 'destroy')->name('.destroy');
    });

Route::controller(ResidentPaymentController::class)
    ->prefix('resident-payments')
    ->name('resident-payments')
    ->group(function () {
        Route::get('/', 'index')->name('.index');
        Route::get('/create', 'create')->name('.create');
        Route::post('/', 'store')->name('.store');
        Route::get('/{id}/edit', 'edit')->name('.edit');
        Route::put('/{id}', 'update')->name('.update');
        Route::delete('/{id}', 'destroy')->name('.destroy');
    });

// });
