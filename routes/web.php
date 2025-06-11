<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\Auth\Login;
use GuzzleHttp\Psr7\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([CheckAccess::class])->group(function () {
Route::get('/', [Login::class, 'login']);
