<?php declare(strict_types=1);

use App\Http\Controllers\MeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', MeController::class);
});
