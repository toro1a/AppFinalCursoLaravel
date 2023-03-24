<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;

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

Route::get('/admin/users',[AdminUsersController::class, 'index'])->name('adminControl');
Route::get('/admin/users/create',[AdminUsersController::class, 'create'])->name('adminUserCreate');
Route::post('/admin/users/store',[AdminUsersController::class, 'store'])->name('adminUserStore');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
