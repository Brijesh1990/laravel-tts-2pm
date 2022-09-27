<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomerController;
use App\http\Controllers\PatelRestaurentsController;
use App\http\Controllers\PatelMenuController;
use App\http\Controllers\PatelSpecialController;
use App\http\Controllers\PatelEventsController;
use App\http\Controllers\PatelChefsController;
use App\http\Controllers\PatelGalleryController;
use App\http\Controllers\PatelContactController;
use App\http\Controllers\PatelBookingController;
use App\http\Controllers\RegisterController;
use App\http\Controllers\LoginController;
use App\http\Controllers\Admin\AdminLoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[CustomerController::class,'index']);
// patel restaurents templates
Route::get('/',[PatelRestaurentsController::class,'index']);
// about us
Route::get('/about-us',function(){
    return view('patel-restaurents.aboutus');
});
// our services
Route::get('/services',function(){
    return view('patel-restaurents.ourservices');
});
// terms&services
Route::get('/termsofservices',function(){
    return view('patel-restaurents.terms');
});
// our menus
Route::get('/our-menus',[PatelMenuController::class,'index']);
// today specials
Route::get('/today-specials',[PatelSpecialController::class,'index']);
// events
Route::get('/events',[PatelEventsController::class,'index']);
// our chefs
Route::get('/our-chefs',[PatelChefsController::class,'index']);
// Gallery
Route::get('/our-food-gallery',[PatelGalleryController::class,'index']);
// contact
Route::get('/contact',[PatelContactController::class,'index']);
// Booking
Route::get('/our-booking',[PatelBookingController::class,'index']);
// Register
Route::get('/create-account',[RegisterController::class,'index']);
Route::post('/create-account',[RegisterController::class,'store']);
// Login
Route::get('/authentication-login',[LoginController::class,'index']);
Route::post('/authentication-login',[LoginController::class,'store']);
// admin Ui routing load here
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::post('/admin-login',[AdminLoginController::class,'store']);