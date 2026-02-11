<?php

use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__))
    // Routing setup
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    // Middleware setup
    ->withMiddleware(function ($middleware) {
        // Define middleware aliases here
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);
    })
    // Exception handling setup
    ->withExceptions(function ($exceptions): void {
    })
    // Create the application instance
    ->create();
