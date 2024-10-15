<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderController;
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

// Авторизация роуты
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// Вывод всех машин
Route::get('/all_cars', [CarController::class, 'all_cars']);
Route::get('/get_car/{id}', [CarController::class, 'get_car']);
Route::get('/random_car', [CarController::class, 'random_car']);

// Создание брони
Route::post('/create/order', [OrderController::class, 'create']);
Route::post('/get/order', [OrderController::class, 'my_orders']);
Route::post('/delete/order/{id}', [OrderController::class, 'cancel_order']);
Route::get('/order/all', [OrderController::class, 'all_orders']);

Route::get('/accept/{id}', [OrderController::class, 'accept']);
Route::get('/cancel/{id}', [OrderController::class, 'cancel']);