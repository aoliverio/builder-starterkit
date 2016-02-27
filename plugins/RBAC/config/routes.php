<?php
use Cake\Routing\Router;

Router::plugin(
    'RBAC',
    ['path' => '/r-b-a-c'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
