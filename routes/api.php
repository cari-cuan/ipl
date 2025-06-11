<?php

use App\Http\Controllers\Auth\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

// Route::post('register', [Authentication::class, 'register'])->name('register');
// Route::post('login', [Authentication::class, 'login'])->name('login');

Route::get('/', function () {
    return response()->json(['message' => 'Hello world!']);
});

Route::post('register', [Authentication::class, 'register']);
Route::post('login', [Authentication::class, 'login']);

Route::middleware('jwt')->group(function () {
    Route::get('/user', [Authentication::class, 'getUser']);
    Route::post('/logout', [Authentication::class, 'logout']);
    Route::put('/user', [Authentication::class, 'updateUser']);
});
