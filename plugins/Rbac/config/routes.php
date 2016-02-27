<?php

use Cake\Routing\Router;

Router::plugin(
        'Rbac', ['path' => '/rbac'], function ($routes) {
    $routes->fallbacks('DashedRoute');
}
);
