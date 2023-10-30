<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Section\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('user', [AuthController::class, 'getUser']);
    Route::group(['prefix' => 'sections'], function () {
        Route::post('/{slug?}', [SectionController::class, 'save']);
        Route::get('/{slug}', [SectionController::class, 'getBySlug']);
    });
});

