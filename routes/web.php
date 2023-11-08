<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('layout.frontend_layout.index');
});

Route::get('/dashboard', function () {
    return view('layout.backend_layout.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/logout', 'destroy')->name('profile.logout');
        Route::get('admin/logout', 'LogoutPage')->name('profile.logout.page');
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('/profile/store', 'StoreProfile')->name('profile.store');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password'); 

        
    });
});

///////////SLIDER ROUTES ///////////

Route::controller(SliderController::class)->prefix('slider')->name('slider.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','EditUsers')->name('edit');
    Route::post('/update/{id}','UpdateUsers')->name('update');
    Route::get('/delete/{id}','DeleteUsers')->name('delete');
    Route::post('/store','Store')->name('store');



});


require __DIR__.'/auth.php';
