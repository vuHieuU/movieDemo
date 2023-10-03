<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\cart\dateTimeController;

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
    //  home
        Route::get('/', [App\Http\Controllers\client\homeController::class, 'index']);
        Route::get('/detail/{id}', [App\Http\Controllers\client\homeController::class, 'show']);
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Auth::routes();
    Route::get('/admin', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin');
    Route::middleware(['auth'])->group(function (){
Route::get('/admin/home', [App\Http\Controllers\admin\HomeController::class, 'index'])->name('index');
    // cate
    Route::prefix('cate')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\CateController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\CateController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\CateController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\CateController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\CateController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\CateController ::class, 'destroy']);
    });
    // Film
    Route::prefix('film')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\filmController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\filmController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\filmController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\filmController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\filmController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\filmController ::class, 'destroy']);
    });
    // ShowTime
    Route::prefix('showTime')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\showTimeController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\showTimeController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\showTimeController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\showTimeController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\showTimeController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\showTimeController ::class, 'destroy']);
    });
    // hour
    Route::prefix('hour')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\hourController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\hourController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\hourController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\hourController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\hourController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\hourController ::class, 'destroy']);
    });
    // day
    Route::prefix('day')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\dayController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\dayController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\dayController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\dayController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\dayController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\dayController ::class, 'destroy']);
    });
    // dayHour
    Route::prefix('dayHour')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\dayHourController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\dayHourController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\dayHourController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\dayHourController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\dayHourController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\dayHourController ::class, 'destroy']);
    });
    // country
    Route::prefix('country')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\countryController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\countryController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\countryController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\countryController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\countryController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\countryController ::class, 'destroy']);
    });
    // cinema
    Route::prefix('cinema')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\cinemaController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\cinemaController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\cinemaController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\cinemaController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\cinemaController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\cinemaController ::class, 'destroy']);
    });
    // room
    Route::prefix('room')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\roomController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\roomController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\roomController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\roomController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\roomController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\roomController ::class, 'destroy']);
    });
    // typeSeat
    Route::prefix('typeSeat')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\typeSeatController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\typeSeatController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\typeSeatController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\typeSeatController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\typeSeatController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\typeSeatController ::class, 'destroy']);
    });
    // seat
    Route::prefix('seat')->group(function(){
        Route::get('index', [App\Http\Controllers\admin\seatController::class, 'index']);
        Route::get('create', [App\Http\Controllers\admin\seatController ::class, 'create']);
        Route::post('store', [App\Http\Controllers\admin\seatController ::class, 'store']);
        Route::get('edit/{id}', [App\Http\Controllers\admin\seatController ::class, 'edit']);
        Route::post('update/{id}', [App\Http\Controllers\admin\seatController ::class, 'update']);
        Route::get('delete/{id}', [App\Http\Controllers\admin\seatController ::class, 'destroy']);
    });
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

        // cart
        Route::get('ticketDateTime/{film_id}',[dateTimeController::class,'index'])->name('date');
        // Route::get('room/{film_id}',[dateTimeController::class,'room'])->name('room');
        Route::get('seat/{film_id}',[dateTimeController::class,'seat'])->name('seat');
        Route::get('pay/{film_id}',[dateTimeController::class,'pay'])->name('pay');
        Route::post('pay/{film_id}',[dateTimeController::class,'handlePay'])->name('saveTicket');
});
