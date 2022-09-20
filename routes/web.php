<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CustomerController;
use App\http\Controllers\PatelRestaurentsController;
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
Route::get('/about-us',function(){
    return view('patel-restaurents.aboutus');
});