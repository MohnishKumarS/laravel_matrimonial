<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('create-profile',[ProfileController::class,'index'])->name('createProfile');
    Route::post('store-profile',[ProfileController::class,'store'])->name('storeProfile');

    // search
    Route::get('search', [UserController::class,'search'])->name('search');

    // account
    Route::get('my-account', [UserController::class,'myAccount'])->name('account');
    // Route::get('change-password', [UserController::class,'changePassword'])->name('changePassword');

    // profile
    Route::get('view-profile/{userid}',[ProfileController::class,'viewProfile'])->name('viewProfile');
    Route::get('edit-profile/{userid}',[ProfileController::class,'editProfile'])->name('editProfile');
    Route::put('update-profile/{userid}',[ProfileController::class,'updateProfile'])->name('updateProfile');

});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard',[AdminController::class,'index']);
});
