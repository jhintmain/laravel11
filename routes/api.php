<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::group(['middleware' => 'api-middleware'], function () {
    //
    Route::get('/user/{id}', [UserController::class,'get']);

    Route::post('/user', [UserController::class,'create']);
});
