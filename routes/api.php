<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\API\BaseController;
use App\http\Controllers\API\ProductController;
use App\http\Controllers\AddBlogsController;
use App\http\Resources\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->group(function() 
{
    Route::post('products',[ProductController::class,'index']);
});
