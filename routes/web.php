<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\FactsController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\OurBlogController;
use App\Http\Controllers\Backend\OurGoalController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\TeamsController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('home');

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

Route::controller(OurGoalController::class)->prefix('goal')->name('goal.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});

Route::put('team-title-update', [TeamsController::class, 'updateTitle'])->name('title.update');

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

Route::put('ourBlog-title-update', [OurBlogController::class, 'updateTitle'])->name('ourblog.title.update');
Route::controller(OurBlogController::class)->prefix('ourBlog')->name('ourBlog.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});


Route::controller(AboutController::class)->prefix('about')->name('about.')->group(function () {
    Route::get('/create', 'Create')->name('create');
    Route::get('/view', 'Index')->name('view');
    Route::get('/edit/{id}','Edit')->name('edit');
    Route::post('/update/{id}','Update')->name('update');
    Route::get('/delete/{id}','Destroy')->name('delete');
    Route::post('/store','Store')->name('store');

});

//Frontend About
Route::get('/about', [FrontendController::class, 'about'])->name('about');

require __DIR__.'/auth.php';
