<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\FactsController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\Our_GoalController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TeamsController;
use App\Http\Controllers\Frontend\SliderController as FrontendSliderController;
use App\Http\Controllers\ProfileController;
use App\Models\Our_Goal;
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

Route::get('/', [FrontendSliderController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('layout.backend_layout.index');
})->middleware(['auth', 'verified'])->name('dashboard');


/////////////////////////  PROFILE ROUTES ////////////////////////////////////
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
        Route::post('/profile', 'StoreProfile')->name('profile.store');
        Route::get('/change/password', 'ChangePassword')->name('change.password');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');


    });
});

//////////////////   SLIDER ROUTES /////////////////

Route::controller(SliderController::class)->prefix('slider')->name('slider.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});


//////////////////////////FEATURE CONTROLLER/////////////
Route::controller(FeatureController::class)->prefix('feature')->name('feature.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});

Route::controller(Our_GoalController::class)->prefix('goal')->name('goal.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});

Route::controller(TeamsController::class)->prefix('teams')->name('team.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});


Route::controller(FactsController::class)->prefix('facts')->name('fact.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});





require __DIR__.'/auth.php';
