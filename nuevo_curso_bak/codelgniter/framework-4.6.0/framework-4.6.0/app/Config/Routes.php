<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'productos::index');
$routes->get('/productos/ver/(:num)', 'productos::ver/$1');

