<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;

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

Route::get('search', [UserController::class,'search'])->name('search');
Route::get('view-partners',[ProfileController::class,'viewPartners'])->name('viewPartners');
Route::get('contact-us',[UserController::class,'contactUs'])->name('contactUs');
Route::post('contact-us',[UserController::class,'contactStore'])->name('contactStore');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('create-profile',[ProfileController::class,'index'])->name('createProfile');
    Route::post('store-profile',[ProfileController::class,'store'])->name('storeProfile');

    // search
    // Route::get('search', [UserController::class,'search'])->name('search');
    Route::get('profile-search',[ProfileController::class,'profileID'])->name('profile.id');
    Route::get('regular-search',[ProfileController::class,'profileSearch'])->name('regular.search');

    // account
    Route::get('my-account', [UserController::class,'myAccount'])->name('account');
    Route::put('change-user-details/{id}', [UserController::class,'changeUserDetails'])->name('changeUserDetails');
    // Route::get('change-password', [UserController::class,'changePassword'])->name('changePassword');

    // profile
    Route::get('view-profile/{userid}',[ProfileController::class,'viewProfile'])->name('viewProfile');
    Route::get('edit-profile/{userid}',[ProfileController::class,'editProfile'])->name('editProfile');
    Route::put('update-profile/{userid}',[ProfileController::class,'updateProfile'])->name('updateProfile');


});

Route::middleware(['auth', 'isAdmin'])->group(function () {
   

    Route::controller(AdminController::class)->group(function(){
        Route::get('dashboard','index')->name('dashboard');
        Route::get('users-profile','usersProfile')->name('users.profile');
        Route::get('users-contact','usersContact')->name('users.contact');

    });
    Route::controller(AdminProfileController::class)->group(function(){
        Route::get('profiles','index')->name('admin.profile.index');
        Route::get('profile-view/{id}','view')->name('admin.profile.view');
        Route::get('profile-create','create')->name('admin.profile.create');
        Route::post('profile-store','store')->name('admin.profile.store');
        Route::get('profile-edit/{id}','edit')->name('admin.profile.edit');
        Route::put('profile-update/{id}','update')->name('admin.profile.update');
        Route::get('profile-delete/{id}','destroy')->name('admin.profile.destroy');

        Route::get('profile-status/{status}/{id}','profileStatus')->name('admin.profile.status');
    });

    Route::view('/admin','errors.404');

});


Route::get('/clear', function() {
   
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // Artisan::call('optimize');
 
    return "Cleared!";
 
 });
 

 
 Route::fallback(function () {
    return view('errors.404');
 });


 
