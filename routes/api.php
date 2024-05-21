<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/tokens/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/tokens/del', function (Request $request) {

    $tokens = $request->user()->tokens;
    $tokenId = $tokens->first()->id;
//    echo $tokenId;
    $request->user()->tokens()->where('id', $tokenId)->delete();
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => 'api-middleware'], function () {
    //
//    Route::get('/user/{id}', [UserController::class,'get']);
//
//    Route::post('/user', [UserController::class,'create']);
    Route::get('/token/{id}', [UserController::class,'token']);
});

Route::get('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});
