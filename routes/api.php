<?php

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::post('/store_category', [CategoryController::class , 'store']);
Route::post('/store_post', [PostController::class, 'store_post']);

Route::get('/index_category', [CategoryController::class, 'index']);
Route::get('/index_post', [PostController::class, 'index']);

Route::put('/update_post/{id}', [PostController::class, 'update_post']);
Route::put('/update_category/{id}', [CategoryController::class, 'update_category']);

Route::delete('/delete_post/{id}', [PostController::class, 'delete_post']);
Route::delete('/delete_category/{id}', [CategoryController::class, 'delete_category']);

