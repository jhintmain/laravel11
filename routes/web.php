<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class, 'index'])->middleware('web-middleware');

Route::group(['middleware' => 'web-middleware'], function () {

    Route::prefix('test')->group(function () {
        Route::get('vite', function () {
            return view('test.vite');
        });
    });

    Route::prefix('member')->group(function () {
        Route::get('list', [MemberController::class, 'list']);
    });
});



Route::fallback(function () {
    // ...
    return response()->view('errors.404', [], 404);

});
