<?php

use App\Http\Controllers\API\TourController;
use App\Http\Controllers\API\ReservationController;
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

Route::get('tours', [TourController::class, 'index']);
Route::post('tours', [TourController::class, 'store']);
Route::get('tours/{tour}', [TourController::class, 'show']);
Route::put('tours/{tour}', [TourController::class, 'update']);
Route::delete('tours/{tour}', [TourController::class, 'destroy']);

Route::get('reservations', [ReservationController::class, 'index']);
Route::post('reservations', [ReservationController::class, 'store']);
Route::delete('reservations/{reservation}', [ReservationController::class, 'destroy']);
Route::get('reservations/{username}', [ReservationController::class, 'reservationsByUser']);

