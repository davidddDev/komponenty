<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Main::index');
$routes->get('typ-komponent/(:any)', 'Main::komponenty_podle_typu/$1');
$routes->get('komponent/(:num)', 'Main::komponent_detail/$1');
$routes->get('taby', 'Main::taby');
$routes->match(['get', 'post'], 'kategorie', 'Main::nova_kategorie');
