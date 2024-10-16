<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login',[AuthController::class,'login']);

Route::apiResource('products',ProductController::class)->only(['index','show']);

// Route::apiResource('orders',OrderController::class)->only(['index']);

Route::apiResource('user.orders',OrderController::class)->scoped()->only(['index']);