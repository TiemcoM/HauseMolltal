<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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
    Route::post('signup', [AuthController::class, 'signup']);
    Route::middleware('auth:api')->post('logout', [AuthController::class, 'logout']);
});

Route::group([
    'middleware' => 'auth:api'
], function () {
    Route::prefix('user')->group(function () {
        Route::get('get', function (Request $request) {
            return $request->user();
        });
    });
});