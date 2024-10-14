<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::apiResource('products',ProductController::class)->only(['index']);

// Route::apiResource('orders',OrderController::class)->only(['index']);

Route::apiResource('user.orders',OrderController::class)->scoped()->only(['index']);