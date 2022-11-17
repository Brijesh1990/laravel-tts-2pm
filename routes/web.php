<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AddGalleryController;
use App\http\Controllers\AddBlogsController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// perform cruid opeations routing 
Route::get('/addgallery',[AddGalleryController::class,'index']);
Route::get('/managegallery',[AddGalleryController::class,'index']);
// add blogs
Route::get('/addblogs',[AddBlogsController::class,'index']);
Route::post('/addblogs',[AddBlogsController::class,'store']);
Route::get('/manageblogs',[AddBlogsController::class,'show']);
Route::get('/manageblogs/{id}',[AddBlogsController::class,'destroy']);
Route::get('/editblogs/{id}',[AddBlogsController::class,'edit']);
Route::post('/editblogs/{id}',[AddBlogsController::class,'update']);

// add gallery 
Route::get('/addgallery',[AddGalleryController::class,'index']);
Route::post('/addgallery',[AddGalleryController::class,'store']);
Route::get('/managegallery',[AddGalleryController::class,'show']);
Route::get('/managegallery/{id}',[AddGalleryController::class,'destroy']);
Route::get('/editgallery/{id}',[AddGalleryController::class,'edit']);
Route::post('/editgallery/{id}',[AddGalleryController::class,'update']);

