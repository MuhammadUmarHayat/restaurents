<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\MenuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',[CustomAuthController::class,'login']);
Route::get('registration',[CustomAuthController::class,'registration']);
Route::post('register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('dashboard',[CustomAuthController::class,'dashboard'])->name('dashboard');

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
   // Route::resource('/tables', TableController::class);
  //  Route::resource('/reservations', ReservationController::class);
});
