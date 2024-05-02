<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
use Statamic\Statamic;

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


//Frontend About
Route::get('/about', [FrontendController::class, 'about'])->name('about');


Route::get('/gallery', [FrontendController::class, 'Photo'])->name('gallery');
Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact');

Route::get('/video', [FrontendController::class, 'Video'])->name('video');


//Frontend Blogs Route
Route::get('/blog', [FrontendController::class,'Blog'])->name('blog');
Route::get('/blog-details/{slug}', [FrontendController::class,'blogDetails'])->name('blog.details');

// Route::statamic('search');





require __DIR__.'/auth.php';
