<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Principal Route
$routes->get('/', 'Home::index');

// Manager Routes GET
$routes->get('/gerenciador', 'ManagerLogin::index');
$routes->get('/gerenciador/logout', 'ManagerLogin::logout');
$routes->get('/gerenciador/dashboard', 'Dashboard::index');
$routes->get('/gerenciador/dashboard/profile', 'Profile::index');
$routes->get('/gerenciador/dashboard/users', 'Users::index');
$routes->get('/gerenciador/dashboard/users/add', 'Users::add');
$routes->get('/gerenciador/dashboard/users/edit/(:any)', 'Users::edit/$1');

// Manager Routes POST
$routes->post('/gerenciador', 'ManagerLogin::login');
$routes->post('/gerenciador/dashboard/profile', 'Profile::edit');
$routes->post('/gerenciador/dashboard/users/add', 'Users::add');
$routes->post('/gerenciador/dashboard/users/edit/(:any)', 'Users::edit/$1');
$routes->post('/gerenciador/dashboard/users/delete', 'Users::delete');

