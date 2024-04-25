<?php

use App\Http\Middleware\ApiMiddleware;
use App\Http\Middleware\WebMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Exceptions\InvalidSignatureException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'web-middleware' => WebMiddleware::class,
            'api-middleware' => ApiMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->render(function (\Exception $e) {
            $viewData = [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'message' => $e->getMessage(),
                'description' => json_encode($e->getTrace()),
            ];
            $stateCode = 500;
            $viewPage = 'errors.500';
            if($e instanceof InvalidSignatureException){
                $stateCode = 403;
                $viewPage = 'errors.link-expired';
            }
            return response()->view($viewPage, $viewData, $stateCode);
        });

    })->create();
