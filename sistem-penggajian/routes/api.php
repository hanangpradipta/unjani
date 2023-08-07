<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/admins/list', [PostsController::class, 'index']);
Route::get('/admins/show/{id}', [PostsController::class, 'show']);
Route::post('/admins/add', [PostsController::class, 'store']);
Route::post('/admins/edit/{id}', [PostsController::class, 'edit']);
Route::delete('/admins/delete/{id}', [PostsController::class, 'delete']);
