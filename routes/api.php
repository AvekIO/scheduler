<?php
declare(strict_types=1);

use Illuminate\Routing\Router;

/** @var Router $router */
$router->fallback(fn () => 'test');
