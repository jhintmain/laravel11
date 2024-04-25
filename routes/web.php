<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => 'web-middleware'], function () {

    // home
    Route::get('/home',[HomeController::class, 'index']);

    // test
    Route::prefix('test')->group(function () {
        Route::get('vite', function () {
            return view('test.vite');
        });

        Route::get('session',[TestController::class, 'sessionTest']);

        Route::post('validation',[TestController::class, 'validationTest'])->name('test.validationTest');
        Route::get('validation', function () {
            return view('test.validation');
        })->name('test.validation');

        Route::prefix('blade')->group(function () {
            Route::get('loop', function () {
                return view('test.blade.loop');
            })->name('test.blade.loop');

            Route::get('conditional_class', function () {
                return view('test.blade.conditional_class');
            })->name('test.blade.conditional_class');

            Route::get('component_alert', function () {
                return view('test.blade.component_alert');
            })->name('test.blade.component_alert');

            Route::get('component_input', function () {
                return view('test.blade.component_input');
            })->name('test.blade.component_input');


        });
    });

    // memeber
    Route::prefix('member')->group(function () {
        Route::get('list', [MemberController::class, 'list'])->name('member.list');
    });
});



// 404 페이지 설정
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
