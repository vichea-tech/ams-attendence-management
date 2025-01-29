<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SubmitController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::group(['prefix' => 'buildings'], function () {
    Route::post('/', [BuildingController::class, 'store']);
    Route::get('/', [BuildingController::class, 'index']);
    Route::patch('/{id}', [BuildingController::class, 'update']);
    Route::delete('/{id}', [BuildingController::class, 'destroy']);
});

Route::group(['prefix' => 'rooms'], function () {
    Route::post('/', [RoomController::class, 'store']);
    Route::get('/', [RoomController::class, 'index']);
    Route::patch('/{id}', [RoomController::class, 'update']);
    Route::delete('/{id}', [RoomController::class, 'destroy']);
});

Route::group(['prefix' => 'schedules'], function () {
    Route::post('/', [ScheduleController::class, 'store']);
    Route::get('/', [ScheduleController::class, 'index']);
    Route::patch('/{id}', [ScheduleController::class, 'update']);
    Route::delete('/{id}', [ScheduleController::class, 'destroy']);
});

Route::group(['prefix' => 'users'], function () {
    Route::post('/', [UserController::class, 'store']);
    Route::get('/', [UserController::class, 'index']);
    Route::patch('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::prefix('submits')->group(function () {
    Route::get('/', [SubmitController::class, 'index']);
    Route::post('/', [SubmitController::class, 'store']);
    Route::get('/{id}', [SubmitController::class, 'show']);
    Route::put('/{id}', [SubmitController::class, 'update']);
    Route::delete('/{id}', [SubmitController::class, 'destroy']);
});
