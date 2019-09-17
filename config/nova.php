<?php

declare(strict_types = 1);

use Laravel\Nova\Http\Middleware\Authenticate;
use Laravel\Nova\Http\Middleware\Authorize;
use Laravel\Nova\Http\Middleware\BootTools;
use Laravel\Nova\Http\Middleware\DispatchServingNovaEvent;

return [

    // Nova system name.
    'name' => env('APP_NAME', 'Admin'),

    'copyright' => 'Thad Bryson',

    'logo_name' => env('APP_NAME', 'Main System'),

    // App URL - clicking application name will take you here to this URL.
    'url'       => env('APP_URL', '/'),

    // Nova Path - URI to access Nova
    'path'      => '/admin',

    'pagination' => 'links',

    /*
    |--------------------------------------------------------------------------
    | Nova Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be assigned to every Nova route, giving you the
    | chance to add your own middleware to this stack or override any of
    | the existing middleware. Or, you can just stick with this stack.
    |
    */

    'middleware' => [
        'web',
        Authenticate::class,
        DispatchServingNovaEvent::class,
        BootTools::class,
        Authorize::class,
    ],

];
