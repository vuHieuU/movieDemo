<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [App\Http\Controllers\client\homeController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::middleware(['auth'])->group(function (){
Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('index');

    // roles
    Route::prefix('role')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\roleController::class, 'index'])->middleware('permission:show-role');
        Route::get('create', [App\Http\Controllers\admin\roleController ::class, 'create'])->middleware('permission:create-role');
        Route::post('store', [App\Http\Controllers\admin\roleController ::class, 'store'])->middleware('permission:create-role');
        Route::get('edit/{id}', [App\Http\Controllers\admin\roleController ::class, 'edit'])->middleware('permission:show-role');
        Route::post('update/{id}', [App\Http\Controllers\admin\roleController ::class, 'update'])->middleware('permission:update-role');
        Route::get('delete/{id}', [App\Http\Controllers\admin\roleController ::class, 'destroy'])->middleware('permission:delete-role');
    });
      // Users
     Route::prefix('user')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\userController::class, 'index'])->middleware('permission:show-user');
        Route::get('create', [App\Http\Controllers\admin\userController ::class, 'create'])->middleware('permission:create-user');
        Route::post('store', [App\Http\Controllers\admin\userController ::class, 'store'])->middleware('permission:create-user');
        Route::get('edit/{id}', [App\Http\Controllers\admin\userController ::class, 'edit'])->middleware('permission:show-user');
        Route::post('update/{id}', [App\Http\Controllers\admin\userController ::class, 'update'])->middleware('permission:update-user');
        Route::get('delete/{id}', [App\Http\Controllers\admin\userController ::class, 'destroy'])->middleware('permission:delete-user');
    });
});
