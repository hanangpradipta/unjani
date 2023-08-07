<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController; 
use App\Http\Controllers\AuthController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/list', function () {
    return view('list');
});
// Route::get('/tambahkaryawan', function () {
//     return view('tambahkaryawan');
// })->name('tambahkaryawan');
// Route::get('/datakaryawanadmin', function () {
//     return view('datakaryawan');
// });

Route::get('/admins/list', [PostsController::class, 'index']);
Route::get('/admins/edit', [PostsController::class, 'edit']);
Route::get('/admins/show/{id}', [PostsController::class, 'show']);
Route::get('/admins/input', [PostsController::class, 'input']);
Route::post('/admins/add', [PostsController::class, 'store']);
Route::post('/admins/new/{id}', [PostsController::class, 'new']);
Route::delete('/admins/delete/{id}', [PostsController::class, 'delete']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


