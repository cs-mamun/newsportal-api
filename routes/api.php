<?php

use App\Http\Controllers\Admin\Api\Auth\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Api\Auth\RegisterController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::post('/register',[RegisterController::class,'create']);
Route::post('/login',[LoginController::class,'login']);

Route::post('/category', [CategoryController::class, 'create']);


Route::middleware('auth:sanctum')->group(function (){
    Route::get('/users',[RegisterController::class,'index']);
});
