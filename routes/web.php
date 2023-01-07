<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('admin/login',[LoginController::class,'showLogin'])->name('login');
Route::get('admin/logout',[LoginController::class,'logout'])->name('logout');
// Route::get('admin/user-list',[UserController::class,'index'])->name('admin.user');
Route::post('admin/authen',[LoginController::class,'auth'])->name('admin.authen');

Route::group(['middleware' => 'auth','prefix' => 'admin'],function (){
    Route::get('dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    
    // route user
    Route::prefix('user')->group( function (){
        Route::get('user-list',[UserController::class,'index'])->name('admin.user');
        Route::get('user-profile',[UserController::class,'showProfile'])->name('admin.userProfile');
    });
});

