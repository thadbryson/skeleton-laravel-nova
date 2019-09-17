<?php

declare(strict_types = 1);

use App\Http\Controllers\Controller;
use App\Http\Controllers\Theme;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

/** @var Router $router */

// Index controller.
$router->get('/', Controller::class . '@index');
