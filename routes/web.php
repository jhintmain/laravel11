<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web-middleware'], function () {

    // home
    Route::get('/home',[HomeController::class, 'index']);

    // test
    Route::prefix('test')->group(function () {
        Route::get('vite', function () {
            return view('test.vite');
        });

        Route::prefix('blade')->group(function () {
            Route::get('loof', function () {
                return view('test.blade.loof');
            })->name('test.blade.loof');

            Route::get('conditional_class', function () {
                return view('test.blade.conditional_class');
            })->name('test.blade.conditional_class');

            Route::get('component', function () {
                return view('test.blade.component');
            })->name('test.blade.component');


        });
    });

    // memeber
    Route::prefix('member')->group(function () {
        Route::get('list', [MemberController::class, 'list']);
    });
});



// 404 페이지 설정
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
