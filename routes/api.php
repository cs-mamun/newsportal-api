<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/category', [CategoryController::class, 'create']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/users', [RegisterController::class, 'index']);

//Route::middleware('auth:api')->group(function (){
//
//});
