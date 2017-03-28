<?php

use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::prefix('admin', function ($routes) {
    $routes->plugin('AuditLog', ['path' => '/audit-log'], function ($routes) {
        $routes->fallbacks(DashedRoute::class);
    });
});
