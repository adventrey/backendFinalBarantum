<?php

use App\Http\Controllers\API\ActivityController;
use App\Http\Controllers\API\UserController;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    Route::middleware('auth:sanctum')->group(function(){
        Route::get('user', [UserController::class, 'fetch']);
        Route::post('user', [UserController::class, 'updateProfile']);
        Route::post('user/photo', [UserController::class, 'updatePoto']);
        Route::post('logout', [UserController::class, 'logout']);
        Route::get('activity', [ActivityController::class, 'all']);
    });

    route::post('login',[UserController::class, 'login']);
    route::post('register',[UserController::class, 'register']);
