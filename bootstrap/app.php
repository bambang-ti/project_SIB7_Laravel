<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
          //tanpa menggunakan compact ke file tertentu
        //sekarang file kernel.php diganti bootstrap/app.php
        $middleware->alias([
            'peran' => App\Http\Middleware\Peran::class,
           
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
