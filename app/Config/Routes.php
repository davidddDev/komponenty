<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Main::index');
$routes->get('typ-komponent/(:num)', 'Main::komponenty_podle_typu/$1');