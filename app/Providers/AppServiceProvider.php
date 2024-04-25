<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 전역제약 - 404에러나게 한다
        Route::pattern('id', '[0-9]+');
        Paginator::useBootstrap();
        Blade::directive('debug', function ($expression) {
            return "<?php dd({$expression}); ?>";
        });
    }
}
