<?php declare(strict_types=1);

use App\Http\Controllers\CookieAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [CookieAuthenticationController::class, 'login']);
Route::post('/logout', [CookieAuthenticationController::class, 'logout']);
