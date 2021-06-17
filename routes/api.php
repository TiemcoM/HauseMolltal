<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
//    Route::post('signup', [AuthController::class, 'signup']);
    Route::middleware('auth:api')->post('logout', [AuthController::class, 'logout']);
});

Route::group([
    'middleware' => 'auth:api'
], function () {
    Route::prefix('user')->group(function () {
        Route::get('get', [UserController::class, 'get']);
        Route::put('update', [UserController::class, 'update']);
        Route::put('changePassword', [UserController::class, 'changePassword']);
    });
    Route::prefix('contact')->group(function () {
        Route::get('get', [ContactController::class, 'get']);
    });
});
